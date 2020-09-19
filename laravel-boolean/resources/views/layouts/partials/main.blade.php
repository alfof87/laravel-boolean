<div class="paste-container">
  <h2>LE LUNGHE</h2>
  <div class="paste">
      @foreach ($data as $x)
        @if ($x["tipo"] == "lunga")
          <img src="{{ asset($x['src']) }}" alt="">
        @endif
      @endforeach
  </div>
  {{-- corte --}}
  <h2>LE CORTE</h2>
  <div class="paste">
      @foreach ($data as $x)
        @if ($x["tipo"] == "corta")
          <img src="{{ asset($x['src']) }}" alt="">
        @endif
      @endforeach
  </div>
  {{-- cortissime --}}
  <h2>LE CORTISSIME</h2>
  <div class="paste">
      @foreach ($data as $x)
        @if ($x["tipo"] == "cortissima")
          <img src="{{ asset($x['src']) }}" alt="">
        @endif
      @endforeach
  </div>
</div>
