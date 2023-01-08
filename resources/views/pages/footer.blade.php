<!--Section: Contact v.2-->
<section class="mb-4">
    <div class="contact_us">
    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Saziņa ar mums</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Ja Jūs esat ieinterresēti Smiltsērkšķos un Cidonījās lūdzu sazinieties ar mums pa tiešo: info@balticberry.com</p>
    <div class="row">
    <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            @if($errors->any())
<span style="color:red font">Jaaizpilda visi lauki</span>
@endif
            <form id="contact-form" name="contact-form" action="/footer" method="POST">
                @csrf
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="vards" name="vards" class="form-control" required>
                            <label for="vards" class="">Vārds</label>
                        </div>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="e_pasts" name="e_pasts" class="form-control" required>
                            <label for="e_pasts" class="">E-pasts</label>
                        </div>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="tema" name="tema" class="form-control" required>
                            <label for="tema" class="">Tēma</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-12">
                        <div class="md-form">
                            <textarea type="text" id="zina" name="zina" rows="2" class="form-control md-textarea"></textarea>
                            <label for="zina">Jūsu ziņa</label>
                        </div>
                    </div>
                </div>
                <div class="text-center text-md-left">
                    <button type="submit" class="btn btn-primary">Sūtīt</button>
                </div>
                <!--Grid row-->
            
            
            <div class="status"></div>
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Ragana, Latvia</p>
                </li>
                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+37126139700</p>
                </li>
                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>info@balticberry.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->
    </div>
</div>
</section>
<!--Section: Contact v.2-->