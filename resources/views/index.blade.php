  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @include('layouts.navbar')

  <h1>index</h1>




  @forelse ($product as $itemProduct)
      <li>
          <div class="flex items-center gap-x-6">
              <h1> {{ $itemProduct->name }}</h1>
              <h2>
                  <img src="{{ Storage::url($itemProduct->image) }}" class="h-20 w-20" alt="">

                  {{-- <a href="{{ Storage::url('$itemproduct->image') }}">{{ $itemproduct->image }}</a> --}}
              </h2>
              <h3>{{ $itemProduct->descripion }}</h3>
              <h4>{{ $itemProduct->price }}</h4>

          </div>
      </li>

  @empty
  @endforelse
