@extends('layouts.web_site')

@section('content')
    <section class="mb-10">
       <div class="c-bg-blue text-white py-2 font-semibold text-center">  <h1>SERVICIOS </h1> </div>
        <article class="p-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @for($i=0; $i < 6;$i++)
                    <div class="bg-white p-4 text-center rounded-2xl ">
                        <h2 >Titulo</h2>
                        <p class="mt-2  text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                    </div>
                @endfor

            </div>

        </article>

    </section>
@endsection


