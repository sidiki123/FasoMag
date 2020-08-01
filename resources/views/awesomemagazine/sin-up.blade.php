
@include('awesomemagazine/layouts/header')
    <main>
        <!-- breadcrumb Start-->
        <div class="page-notification">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Sign Up</a></li> 
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb End -->
        <!-- Register Area Start -->
        <form  action="{{url('/sin-up')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
        <div class="register-form-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="register-form text-center">
                            <!-- Login Heading -->
                            <div class="register-heading">
                                <span>Souscrire</span>
                                <p>Souscriver à notre journal et soyez informer en temps réel</p>
                            </div>
                            <!-- Single Input Fields -->
                            
                            <div class="input-box">
                            
                                {{-- <div class="single-input-fields">
                                    <label>Nom</label>
                                    <input type="text" placeholder="Entrer votre nom" name="nom">
                                </div>
                                <div class="single-input-fields">
                                        <label>Prenom</label>
                                        <input type="text" placeholder="Entrer votre prenom" name="prenom">
                                    </div> --}}
                                <div class="single-input-fields">
                                    <label>Email Address</label>
                                    <input type="email" name="email" placeholder="Enter email address" >
                                </div>
{{-- 
                                <div class="default-select single-input-fields" id="default-select">
                                    <label>Categorie</label>
                                    <select name="categorie">
                                            <option value="1">Politique</option>
                                            <option value="2">Economie</option>
                                            <option value="3">Societe</option>
                                            <option value="4">Cooperation</option>
                                            <option value="5">Culture</option>
                                    </select>
                                </div> --}}
                                {{-- <div class="single-input-fields">
                                    <label>Password</label>
                                    <input type="password" placeholder="Enter Password">
                                </div>
                                <div class="single-input-fields">
                                    <label>Confirm Password</label>
                                    <input type="password" placeholder="Confirm Password">
                                </div> --}}
                            </form>
                            </div>
                            <!-- form Footer -->
                            <div class="register-footer">
                                {{-- <p> Already have an account? <a href="login.html"> Login</a> here</p> --}}
                                <a href=""><button class="submit-btn3">Souscrire</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <!-- Register Area End -->
    </main>

    @include('awesomemagazine/layouts/footer')
    </body>
</html>