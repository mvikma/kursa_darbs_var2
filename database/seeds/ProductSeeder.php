<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            "nosaukums"=>"Smiltsērkšķu sula 300ml",
            "cena"=>"€3.00",
            "apraksts"=>"Smiltērkšķu sula ir saudzīgi pasterizēta un gatava lietošanai. Smiltsērkšķu sula ir viens no vislabākajiem imunitātes stirpināšanas veidiem, jo sula satur kā ūdenī, tā eļļā šķīstošos vitamīnus, kā arī vairākus fermentus. Mēs piedāvājam dabīgu, svaigi spiestu  smiltsērkšķu sulu, kas bagāta ar cilvēkam tik ļoti nepieciešamajiem vitamīniem. Sulai ir intensīva garša, tāpēc ieteicams to atšķaidīt ar ūdeni vai pienu. Sastāvs – 100% Smiltsērkšķu sula.",
            "kategorija"=>"Sulas",
            "galerija"=>"sm_sula.webp",
        ],
        [
            "nosaukums"=>"Dzērveņu sula 300ml",
            "cena"=>"€3.15",
            "apraksts"=>"Dzērveņu sulas  ir labākais kā stiprināt veselību ziemā.  Mēs piedāvājam svaigi spiestu, dabīgu dzērveņu sulu, kas bagātīga ar tik ļoti cilvēka organismam nepieciešamajiem vitamīniem un fermentiem. Sula satur bagātīgu vitamīnu kompleksu tieši Jums. Sastāvs – 100% Dzērveņu sula.",
            "kategorija"=>"Sulas",
            "galerija"=>"dzer_sula.webp",
        ],
        [
            "nosaukums"=>"Žāvētas cidonijas",
            "cena"=>"€4.00",
            "apraksts"=>"Kas var būt garšīgs un vienlaikus veselīgs našķis? Protams, ka žāvētas un nedaudz saldinātas cidonijas. Žāvētas cidonijas ir lielisks gardums ko uzkost ikdienas steigā vai baudot nesteidzīgu vakaru mājās. Žāvētas cidonijas piedāvājam 200g iepakojumā. Sastāvs – 100% Žāvētas Cidonijas. Svars – 200gr(Netto). Iepakojuma izmēri – Augstums – 160mm, platums – 50mm, garums – 80mm.",
            "kategorija"=>"Sukādes",
            "galerija"=>"zav_cid.jpeg",
        ],
        [
            "nosaukums"=>"Žāvētas Dzērvenes",
            "cena"=>"€6.00",
            "apraksts"=>"Kas var būt garšīgs un vienlaikus veselīgs našķis? Protams, ka žāvētas un nedaudz saldinātas dzērvenes. Žāvētas dzērvenes ir lielisks gardums ko uzkost ikdienas steigā vai baudot nesteidzīgu vakaru mājās. Sastāvs – 100% Žāvētas lielogu dzērvenes. Žāvētas dzērvenes piedāvājas 300g iepakojumā. Svars – 300gr(Netto). Iepakojuma izmēri: Augstums – 190mm, platums – 60mm, garums 90mm.",
            "kategorija"=>"Sukādes",
            "galerija"=>"https://icegarden.lv/wp-content/uploads/2021/05/image00013.jpeg",
        ],
        [
            "nosaukums"=>"Saldēti Smiltsērkšķi",
            "cena"=>"Atkarīgs no daudzuma",
            "apraksts"=>"25kg par maisu, 750kg par palleti. Var pasūtīt no 1 palletes(750kg)-1 kravas mašīnai(21750kg)",
            "kategorija"=>"Oga",
            "galerija"=>"pro_oga1.jpg",
        ],
        [
            "nosaukums"=>"Saldētas Cidonijas",
            "cena"=>"Atkarīgs no daudzuma",
            "apraksts"=>"400kg kartona oktabīne, 1 oktabīne par palleti. Var pasūtīt no 1 palletes(400kg)-1 kravas mašīnai(20800kg)",
            "kategorija"=>"Oga",
            "galerija"=>"pro_oga2.jpg",
        ]
        ]);
    }
} 
