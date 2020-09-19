<div class="paste-container">
  <h1>LE LUNGHE</h1>
  <div class="paste">
      @foreach ($data as $x)
        @if ($x["tipo"] == "lunga")
          <img src="{{ asset($x['src']) }}" alt="">
        @endif
      @endforeach
  </div>
  {{-- corte --}}
  <h1>LE CORTE</h1>
  <div class="paste">
      @foreach ($data as $x)
        @if ($x["tipo"] == "corta")
          <img src="{{ asset($x['src']) }}" alt="">
        @endif
      @endforeach
  </div>
  {{-- cortissime --}}
  <h1>LE CORTISSIME</h1>
  <div class="paste">
      @foreach ($data as $x)
        @if ($x["tipo"] == "cortissima")
          <img src="{{ asset($x['src']) }}" alt="">
        @endif
      @endforeach
  </div>
</div>
