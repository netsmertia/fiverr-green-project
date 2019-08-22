@extends('_layouts.master')

@section('body')
@include('partials._header')

<div class="container-fluids" id="">
    <section class="section comm">
        <div class="content-wrapper d-flex">
            <div class="content mb-5 d-flex">
                <div class="row mt-lg-100">
                    <div class="col-lg-5 pb-5 d-flex align-items-end">
                        <div class="card mx-md-5">
                            <div class="card-body">
                                <p class="pt25 mb-0">“Mi Comunidad” es un mapa interactivo que muestra todas las organizaciones sin fines de lucro registradas en NeedMe. Las personas que buscan un lugar para colaborar, pueden encontrarlas por causas o distancia de su conveniencia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center mt-5 mt-lg-0">
                        <h1 class="pt120 mb-1">PRONTO</h1>
                        <p class="pt25 text-muted">
                            ¡Espéranos! Estaremos aquí pronto.
                        </p>
                        <p class="medium-text mt-3">¡Te dejaremos saber cuando estemos listos!</p>
                        <div class="row center-in-row">
                            <div class="col-10">
                                <form action="form-inline">
                                    <div class="input-group">
                                        <div class="form-icon-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28.434" height="18.291" viewBox="0 0 28.434 18.291">
                                                <path id="Path_406" data-name="Path 406" d="M97.342,147.28H71.251a1.171,1.171,0,0,0-1.171,1.171V164.4a1.171,1.171,0,0,0,1.171,1.171H97.342a1.171,1.171,0,0,0,1.171-1.171V148.451A1.171,1.171,0,0,0,97.342,147.28Zm.251,15.695-9.58-7.556,9.58-5.937ZM71.251,148.2H97.342a.251.251,0,0,1,.239.178l-13.285,8.3-13.285-8.3A.251.251,0,0,1,71.251,148.2ZM71,149.427l9.556,5.968L71,162.975Zm26.342,15.217H71.251a.251.251,0,0,1-.251-.251v-.245l10.384-8.206,2.668,1.668a.46.46,0,0,0,.491,0l2.668-1.668,10.384,8.206v.245A.251.251,0,0,1,97.342,164.643Z" transform="translate(-70.08 -147.279)" fill="#6f6f6f" opacity="0.4" />
                                            </svg>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Correo electrónico">
                                        <div class="form-group-append">
                                            <button class="btn btn-green-light border-0 text-white">SUSCRÍBETE</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('partials._footer')
@endsection