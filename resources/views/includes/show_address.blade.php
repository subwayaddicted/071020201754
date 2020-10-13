<div class="r_col">
    <h2>My Addresses</h2>

    <div class="uo_adr_list">
        @foreach ($addresses as $address)

            <div class="item">
                <h3>{{ $address->name }}</h3>
                <p>{{ $address->city }}, {{ $address->area }}, {{ $address->street }}, {{ $address->house }} </p>
                @if ($address->additional_info)
                    <p>Additional info: {{ $address->additional_info }}</p>
                @endif
                <div class="actbox">
                    <a href="#" class="bcross"></a>
                </div>
            </div>
        @endforeach
    </div>
</div>
