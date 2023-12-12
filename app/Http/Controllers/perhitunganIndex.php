<?php

namespace App\Http\Controllers;

use App\Http\Controllers\perhitungan;
use App\Models\Books;

class perhitunganIndex extends Controller
{

    function index($book, $books)
    {
        $data = [];
        foreach ($books as $row) {
            $sinopsis = str_replace('nbsp', '', $row->sinopsis);
            $data[$row->id] = $this->pre_process(strip_tags($sinopsis) . ' ' . $row->pengarang_1 . ' ' . $row->pengarang_2 . ' ' . $row->pengarang_3 . ' ' . $row->judul_buku . ' ' . $row->subyek_1);
        }

        // dd($data);
        $cbrs = new perhitungan();

        $cbrs->create_index($data);
        // dd($cbrs);
        $cbrs->idf();
        // dd($cbrs);
        $w = $cbrs->weight();
        // dd($cbrs,$w);
        $r = $cbrs->similarity($book->id);
        //  dd($r,$cbrs,$w,$r);
        // dd($cbrs);
        // dd($r);

        $n = 8;
        $i = 0;
        $first_key = key($r);
        $sum = $r[array_keys($r)[1]] + $r[array_keys($r)[count($r) - 1]];
    //    dd($sum);
        $filtered = [];
        $T = $sum / 2;
        // $T = 0.15;
        //    dd($T);
        foreach ($r as $key => $value) {
            if ($value >= $T and $key !== $first_key) {
                $filtered[$key] = $value;
                    //    dd($r);
            }
        }
        
        $recommendation = $filtered; //urutan rekomendasi
            // dd($recommendation);
        $bookRecommendation = Books::whereIn('id', array_keys($recommendation))
            ->orderByRaw('FIELD(id, ' . implode(', ', array_keys($recommendation)) . ')')
            ->get();
        // dd($bookRecommendation);
        return $bookRecommendation;
                // dd($bookRecommendation);

        // $n = 8;
        // $i = 0;
        // $first_key = key($r);
        // $sum = 0;
        // foreach ($r as $key => $value) {
        //     if ($key !== $first_key) {
        //         $sum = $sum + $value;
        //     }
        // }
        // $filtered = [];
        // $T = $sum / 10;
        // foreach ($r as $key => $value) {
        //     if ($value >= $T and $key !== $first_key) {
        //         $filtered[$key] = $value;
        //     }
        // }
        // $recommendation = $filtered; //urutan rekomendasi

        // // dd($filtered);
        // $bookRecommendation = Books::whereIn('id', array_keys($recommendation))
        //     ->orderByRaw('FIELD(id, ' . implode(', ', array_keys($recommendation)) . ')')
        //     ->get();
        // // dd($bookRecommendation);
        // return $bookRecommendation;
    }



    function pre_process($str)
    {
        $stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
        $stemmer = $stemmerFactory->createStemmer();

        $stopWordRemoverFactory = new \Sastrawi\StopWordRemover\StopWordRemoverFactory();
        $stopword = $stopWordRemoverFactory->createStopWordRemover();

        $str = strtolower($str);
        //  dd($str);
        $str = $stemmer->stem($str);
        //  dd($str);
        $str = $stopword->remove($str);
        // dd($str);
        return $str;
    }
}
