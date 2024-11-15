@extends('layouts.app')
@section('content')
<div class="block mt-2">
    <div class="swiper mySwiper w-full">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="{{asset('images/schoolbanner.png')}}" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('images/banner.png')}}" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('images/banner.png')}}" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('images/banner.png')}}" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('images/banner.png')}}" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('images/banner.png')}}" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('images/banner.png')}}" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('images/banner.png')}}" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('images/banner.png')}}" alt=""></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
</div>
            @php
                $priority = ['important','notice', 'extra', 'ignorable'];
                $count = 1;
                $i = [4,3,2,1];
                $message = ['शिक्षा मन्त्रालयको आदेशानुसार भोली स्कूल बन्द रहने कुरा अवगत गराउन चाहान्छौँ ।','परीक्षाफल प्रकाशनको सूचना ।','अतिरिक्त कृयाकलामा भाग लिने सम्बन्धी सूचना ।','प्रधानमन्त्री के.पी. शर्मा वली यसै देवचुली नगरपालिकामा पाल्नुहुने भएकाले सम्पुर्ण विद्यार्थीहरुमा फुलमाला सहित स्वागतमा उपस्थित हुन अनुरोध छ।'];
            @endphp
<div class="block snap-center sm:flex sm:w-full mt-4 gap-5 w-full">
    <div class="flex-1 text-white">
        <h1 class="font-bold text-2xl w-ful bg-slate-600 px-2 py-2">महत्वपूर्ण सूचनाहरु</h1>
            <div class="suchana">
                @foreach($i as $iloop)
                    <div class="py-1 bg-gray-700 px-3 odd:bg-gray-500">
                        <div class=" mt-1 flex justify-between">
                            <span id="nepalidate" class=" bg-gray-600 font-bold px-2 rounded-lg shadow-lg noto-serif-devanagari-400">{{$iloop}} असोज २०८१, आइतवार</span>
                           @if($priority[$iloop-1] == 'important')
                            <span class="bg-red-600 px-2 rounded-lg shadow-lg">{{$priority[$iloop-1]}}</span>
                            @elseif($priority[$iloop-1] == 'notice')
                            <span class="bg-blue-500 px-2 rounded-lg shadow-lg">{{$priority[$iloop-1]}}</span>
                            @elseif($priority[$iloop-1] == 'extra')
                            <span class="bg-green-600 px-2 rounded-lg shadow-lg ">{{$priority[$iloop-1]}}</span>
                            @elseif($priority[$iloop-1] == 'ignorable')
                            <span class="bg-yellow-600 px-2 rounded-lg shadow-lg">{{$priority[$iloop-1]}}</span>
                            @endif
                        </div>
                        <h1 class=" mt-3 noto-serif-devanagari-400 text-xl">{{$message[$iloop-1]}}</h1>
                    </div>
                    @php
                        $count++;
                    @endphp
                @endforeach
            </div>
    </div>
    {{-- hamropatro  --}}
    <div class="">
        <iframe src="https://www.hamropatro.com/widgets/calender-medium.php" defer frameborder="0" scrolling="no" marginwidth="0" marginheight="0" style="border:none; overflow:hidden; width:295px; height:385px;" allowtransparency="true" class="mx-auto"></iframe>
    </div>
</div>
<div class="flex bg-gray-600 w-full py-3 overflow-hidden justify-center">
    <div class="flex flex-col text-white ml-5 py-2 gap-3 text-center">
        <h1 class="text-6xl font-bold">Welcome to</h1>
        <h1 class="text-6xl font-bold">Devchuli Secondary School</h1>

        <div class="mt-5">
            <a href="" class="bg-gray-600 px-3 py-2 ring-2 ring-blue-500 rounded-lg">Learn More</a>

        </div>
    </div>

</div>
@endsection
