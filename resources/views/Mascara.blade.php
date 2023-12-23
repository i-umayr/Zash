@extends('layouts.main')
@push('title')
    <title>Mascara</title>
@endpush
@section('content')

<body>

    <main>

        {{-- <!-- Mascaras --}}
            <section class="section-a">
                <x-Navbar />
                     <h2>MASCARA</h2>
                     <div class="container-fluid">

                         <div class="row ">
                             @foreach ($products as $product)
                             <x-Card :productID="$product['productID']" :picPath="$product['picPath']" :picPath2="$product['picPath2']"  :productTitle="$product['Title']" :productCategory="$product['SubCategory']" :productPrice="$product['price']" :discounted="$product['discountedPrice']" />
                             @endforeach

                     </div>
                 </section>

    </main>
        <x-Foot />
@endsection
