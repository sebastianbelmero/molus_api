<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $optionForQuestion1 = [
            [
                'option' => 'Bekerja (full time/part time)',
                'more_answer' => false,
            ],
            [
                'option' => 'Wiraswasta',
                'more_answer' => false,
            ],
            [
                'option' => 'Melanjutkan Pendidikan',
                'more_answer' => false,
            ],
            [
                'option' => 'Tidak Kerja tetapi sedang mencari kerja',
                'more_answer' => false,
            ],
            [
                'option' => 'Belum memungkinkan bekerja',
                'more_answer' => false,
            ],
        ];

        $json1 = [];
        foreach ($optionForQuestion1 as $value) {
            $json1[] = [
                'option' => $value
            ];
        }

        $optionForQuestion2 = [
            [
                'option' => 'Ya',
                'more_answer' => false,
            ],
            [
                'option' => 'Tidak',
                'more_answer' => false,
            ]
        ];

        $json2 = [];
        foreach ($optionForQuestion2 as $value) {
            $json2[] = [
                'option' => $value
            ];
        }

        $optionForQuestion5 = [
            [
                'option' => 'Instansi pemerintah',
                'more_answer' => false,
            ],
            [
                'option' => 'BUMN/BUMD',
                'more_answer' => false,
            ],
            [
                'option' => 'Institusi/Organisasi Multilateral',
                'more_answer' => false,
            ],
            [
                'option' => 'Organisasi non-profit/Lembaga Swadaya Masyarakat',
                'more_answer' => false,
            ],
            [
                'option' => 'Perusahaan swasta',
                'more_answer' => false,
            ],
            [
                'option' => 'Wiraswasta/perusahaan sendiri',
                'more_answer' => false,
            ],
            [
                'option' => 'Lainnya, tuliskan:',
                'more_answer' => true,
            ]
        ];

        $json5 = [];
        foreach ($optionForQuestion5 as $value) {
            $json5[] = [
                'option' => $value
            ];
        }

        $optionForQuestion10 = [
            [
                'option' => 'Biaya Sendiri / Keluarga',
                'more_answer' => false,
            ],
            [
                'option' => 'Beasiswa ADIK',
                'more_answer' => false,
            ],
            [
                'option' => 'Beasiswa BIDIKMISI',
                'more_answer' => false,
            ],
            [
                'option' => 'Beasiswa PPA',
                'more_answer' => false,
            ],
            [
                'option' => 'Beasiswa AFIRMASI',
                'more_answer' => false,
            ],
            [
                'option' => 'Beasiswa Perusahaan/Swasta',
                'more_answer' => false,
            ],
            [
                'option' => 'Lainnya, tuliskan:',
                'more_answer' => true,
            ]
        ];

        $json10 = [];
        foreach ($optionForQuestion10 as $value) {
            $json10[] = [
                'option' => $value
            ];
        }

        $optionForQuestion11 = [
            [
                'option' => 'Sangat Erat',
                'more_answer' => false,
            ],
            [
                'option' => 'Erat',
                'more_answer' => false,
            ],
            [
                'option' => 'Cukup Erat',
                'more_answer' => false,
            ],
            [
                'option' => 'Kurang Erat',
                'more_answer' => false,
            ],
            [
                'option' => 'Tidak Sama Sekali',
                'more_answer' => false,
            ]
        ];

        $json11 = [];
        foreach ($optionForQuestion11 as $value) {
            $json11[] = [
                'option' => $value
            ];
        }

        $optionForQuestion12 = [
            [
                'option' => 'Setingkat Lebih Tinggi',
                'more_answer' => false,
            ],
            [
                'option' => 'Tingkat yang Sama',
                'more_answer' => false,
            ],
            [
                'option' => 'Setingkat Lebih Rendah',
                'more_answer' => false,
            ],
            [
                'option' => 'Tidak Perlu Pendidikan Tinggi',
                'more_answer' => false,
            ]
        ];

        $json12 = [];
        foreach ($optionForQuestion12 as $value) {
            $json12[] = [
                'option' => $value
            ];
        }

        $question1to5 = [
            "Etika",
            "Keahlian berdasarkan",
            "bidang ilmu",
            "Bahasa Inggris",
            "Penggunaan Teknologi",
            "Informasi",
            "Komunikasi",
            "Kerja sama tim",
            "Pengembangan Diri"
        ];

        $json11to5 = [];
        foreach ($question1to5 as $value) {
            $json11to5[] = [
                'question' => $value
            ];
        }

        $option1to5 = [
            [
                'option' => 1,
                'more_answer' => false,
            ],
            [
                'option' => 2,
                'more_answer' => false,
            ],
            [
                'option' => 3,
                'more_answer' => false,
            ],
            [
                'option' => 4,
                'more_answer' => false,
            ],
            [
                'option' => 5,
                'more_answer' => false,
            ]
        ];

        $questions = [
            [
                'question_type_id' => 1,
                'question' => 'Jelaskan status Anda saat ini?',
                'question_option' => null,
                'option_response' => json_encode($json1),
                'required' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_type_id' => 1,
                'question' => 'Apakah anda telah mendapatkan pekerjaan <= 6 bulan / termasuk bekerja sebelum lulus ?',
                'question_option' => null,
                'option_response' => json_encode($json2),
                'required' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_type_id' => 4,
                'question' => 'Dalam berapa bulan anda mendapatkan pekerjaan ?',
                'question_option' => null,
                'option_response' => null,
                'required' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_type_id' => 4,
                'question' => 'Berapa rata-rata pendapatan anda per bulan ? (take home pay)?',
                'question_option' => null,
                'option_response' => null,
                'required' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_type_id' => 4,
                'question' => 'Dimana lokasi tempat Anda bekerja?',
                'question_option' => null,
                'option_response' => null,
                'required' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_type_id' => 1,
                'question' => 'Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang?',
                'question_option' => null,
                'option_response' => json_encode($json5),
                'required' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_type_id' => 4,
                'question' => 'Apa nama perusahaan/kantor tempat Anda bekerja?',
                'question_option' => null,
                'option_response' => null,
                'required' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_type_id' => 4,
                'question' => 'Bila berwiraswasta, apa posisi/jabatan Anda saat ini ?',
                'question_option' => null,
                'option_response' => null,
                'required' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_type_id' => 4,
                'question' => 'Apa tingkat tempat kerja Anda?',
                'question_option' => null,
                'option_response' => null,
                'required' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_type_id' => 1,
                'question' => 'Sebutkan sumberdana dalam pembiayaan kuliah? (bukan ketika Studi Lanjut)',
                'question_option' => null,
                'option_response' => json_encode($json10),
                'required' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_type_id' => 4,
                'question' => ' Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?',
                'question_option' => null,
                'option_response' => json_encode($json11),
                'required' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_type_id' => 1,
                'question' => 'Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?',
                'question_option' => null,
                'option_response' => json_encode($json12),
                'required' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_type_id' => 5,
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda kuasai? (1 = Sangat Rendah, 5 = Sangat Tinggi)',
                'question_option' => json_encode($json11to5),
                'option_response' => json_encode($option1to5),
                'required' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_type_id' => 5,
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini diperlukan dalam pekerjaan? (1 = Sangat Rendah, 5 = Sangat Tinggi)',
                'question_option' => json_encode($json11to5),
                'option_question' => json_encode($option1to5),
                'required' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        Question::insert($questions);
    }
}
