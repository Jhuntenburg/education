<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ReadingController extends Controller
{
    public function generateReading(Request $request)
    {
        // Validate the user's question
        $request->validate([
            'question' => 'required|string|max:255',
        ]);

        // Get the user's question
        $question = $request->input('question');

        // Randomly select 3 cards
        $cards = Card::inRandomOrder()->limit(3)->get();

        // Prepare the input for ChatGPT
        $prompt = "Question: {$question}\n\n take the following cards and write a Tarot reading based on them:\n\n";


        foreach ($cards as $index => $card) {
            $prompt .= "Card " . ($index + 1) . ": {$card->name}\n";
            $prompt .= "Description: {$card->description}\n\n";
        }

        // Send the prompt to ChatGPT
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . "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",
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-3.5-turbo-0125', // Update the model here
            'messages' => [
                ['role' => 'system', 'content' => 'You are a tarot reading expert.'],
                ['role' => 'user', 'content' => $prompt],
            ],
            'max_tokens' => 150,
        ]);

Log::info(env('OPENAI_API_KEY'));
        Log::info('OpenAI API Response:', $response->json());

        $generatedReading = $response->json('choices.0.text');
//        $generatedReading = "Your journey thus far has been long and transformative, and you stand at the precipice of a significant shift. The Judgement card signifies that you have reached a point of profound reflection and realization. This project represents the culmination of your past experiences, a gateway through which you must pass to reach a new phase of personal and professional growth. You have learned much, and now it is time to embrace the next stage with confidence. The success you seek is on the other side of this threshold, but you must be willing to take that leap into the unknown, trusting in the transformative power of your efforts.
//
//However, the Nine of Wands reminds you that this path has not been easy, and the challenges have taken their toll. You are weary, perhaps even on the verge of burnout. Yet, your resilience is your greatest strength. This card advises you to take the time to rest and replenish your energy. The road ahead may still present obstacles, but with self-care and determination, you will be able to push through. Do not give up now; you are closer to your goal than you realize.
//
//Finally, the Ace of Cups offers a promise of emotional fulfillment and new beginnings. This card indicates that your project has the potential to bring deep satisfaction and joy, not just in terms of success, but in how it connects you to your passion and purpose. Allow yourself to open up to the positive emotions and opportunities that are flowing towards you. By embracing the love and inspiration that this project brings, you will find that happiness and success are intertwined.
//
//Conclusion:
//
//This project holds the potential to bring you the success you desire, but it will require you to move beyond your current limitations and embrace the change that is coming. Take care of yourself as you navigate the remaining challenges, and remain open to the emotional rewards that are on their way. With perseverance and openness, you will find the fulfillment you seek.";
        // Pass the cards and reading to the view
//        return view('reading.show', [
//            'question' => $question,
//            'cards' => $cards,
//            'reading' => $generatedReading,
//        ]);
        return view('reading.show',
            compact('question', 'cards', 'generatedReading')
        );
    }

}
