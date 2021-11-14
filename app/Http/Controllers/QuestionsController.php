<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionsController extends Controller
{
    public function index()
    {
        $this->newGame();
        return view('pages.start');
    }

    public function question(Request $request)
    {
        if ($request->session()->get('question_id') > 20) {
            return view('pages.victory');
        }

        $question = Question::where('id', $request->session()->get('question_id'))->first();

        $options[] = $question->answer;
        $randNumbers = range(1, 300);
        shuffle($randNumbers);

        for ($i = 1; $i <= 3; $i++) {
            $options[] = $randNumbers[$i];
        }
        shuffle($options);

        return view('pages.game', [
            'question' => $question->question,
            'options' => $options
        ]);
    }

    public function newGame(): void
    {
        DB::table('questions')->truncate();
        $randNumbers = range(1, 300);
        shuffle($randNumbers);

        for ($i = 1; $i <= 20; $i++) {
            $url = "http://numbersapi.com/{$randNumbers[$i]}?json";
            $response_data = json_decode(file_get_contents($url));
            $response_text = str_replace($response_data->number, 'What', $response_data->text);
            $response_text = substr_replace($response_text, '?', -1);

            $question = new Question([
                'question' => $response_text,
                'answer' => $response_data->number,
            ]);
            $question->save();
        }
        session(['question_id' => 1]);
    }

    public function check(Request $request)
    {
        $question = Question::where('id', $request->session()->get('question_id'))->first();

        if ($request->input('option') == $question->answer) {
            $request->session()->increment('question_id');
            return back();
        } else {
            return view('pages.loss', [
                'last_question' => $question->question,
                'answer' => $question->answer,
            ]);
        }
    }
}
