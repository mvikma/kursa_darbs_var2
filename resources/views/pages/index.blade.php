@extends('pages.master')
@section('content')
        <div class="index-section">
            <div class="container1">
                <h1 class="text-center">BalticBerry</h1>
                <p class="section-description text-center tect-bold">
                    BalticBerry - Gādājot Tev labāko no dabas</p>
            </div> <!-- end container -->
            <div class="container2">
                <h1 class="text-center">Produkti</h1>
                <p class="section-description text-center">
                    Mēs piedāvājam gan bioloģiski, gan konvencionāli audzētas smiltsērkšķu ogas un augstākās kvalitātes cidoniju. Ogas audzē, ievērojot "BalticBerry" izstrādātās vadlīnijas, kas nodrošina gatavās produkcijas kvalitāti. Lauku pārbaudes, mēslošana un citas darbības tiek veiktas saskaņā ar vienu sistēmu. Latvija ir pazīstama ar savām kvalitatīvajām ogām, jo ​​šeit audzētās šķirnes ir atlasītas, lai pielāgotos šiem apstākļiem jau 40 gadus.</p>
                <div class="products text-center">
                    <div class="text-center button-container">
                        <a href="/shop"><button class="index_button" type="button">Uz mūsu produktiom</button></a>
                    </div>                   
                </div> <!-- end products -->
            </div> <!-- end container -->
            <div class="container3">
                <h1 class="text-center">Blogs</h1>
                <p class="section-description text-center">
                    Par jaunāko mūsu uzņēmumā Jūs varat apskatīties mūsu blogā.
                </p>
                <div class="text-center button-container">
                    <a href="/blog"><button class="index_button" type="button">Uz mūsu blogu</button></a>
                </div>
            </div> <!-- end container -->
            <div class="container4">
                <h1 class="text-center">Par mums</h1>
                <p class="section-description text-center">
                    BalticBerry ir stāsts par Ticību sev, dabai un ģimenei.<br>
                    Ticību tīrai, neskartai un spēcīgai dabai.<br>
                    Ticību sapņiem, drosmei un mērķtiecībai.<br>
                    Ticību ģimenei – veselai, laimīgai un vienotai.</p>
                <div class="text-center button-container">
                    <a href="/about"><button class="index_button" type="button">Vairāk par mums</button></a>
                </div>
            </div> <!-- end container -->
        </div> <!-- end index-section -->
@endsection