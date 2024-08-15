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
Log::info($prompt);
        // Send the prompt to ChatGPT
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . "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",
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-3.5-turbo', // Update the model here
            'messages' => [
                ['role' => 'system', 'content' => 'You are a tarot reading expert.'],
                ['role' => 'user', 'content' => $prompt],
            ],
            'max_tokens' => 600,
        ]);

Log::info(env('OPENAI_API_KEY'));
        Log::info('OpenAI API Response:', $response->json());
        $responseData = $response->json();
        Log::info('OpenAI API Response:', $responseData);

        // Log the token usage
        if (isset($responseData['usage'])) {
            Log::info('Token Usage:', [
                'prompt_tokens' => $responseData['usage']['prompt_tokens'],
                'completion_tokens' => $responseData['usage']['completion_tokens'],
                'total_tokens' => $responseData['usage']['total_tokens'],
            ]);
        } else {
            Log::warning('Token usage information not available in the response.');
        }

//        $generatedReading = $response->json('choices.0.text');
        $generatedReading = $responseData['choices'][0]['message']['content'] ?? 'No reading was generated.';

        // Pass the cards and reading to the view
        return view('reading.show', [
            'question' => $question,
            'cards' => $cards,
            'reading' => $generatedReading,
        ]);
//        return view('reading.show',
//            compact('question', 'cards', 'generatedReading')
//        );
    }

}
