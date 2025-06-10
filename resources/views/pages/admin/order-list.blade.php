@extends('layouts.admin')
@section('content')

<div class="p-4 col-12">
    <h2 class="d-flex justify-content-center p-4 titleAdmin">PORUDŽBINE</h2>

    {{ $orders->links() }}
    <table class="table table-striped text-center">
        <thead>
            <tr class="trAdmin">
                <th class="colorAdmin firstRowAdmin">RB</th>
                <th class="colorAdmin">NARUČIOC</th>
                <th class="colorAdmin">NAZIV FIRME</th>
                <th class="colorAdmin">TELEFON</th>
                <th class="colorAdmin">EMAIL</th>
                <th class="colorAdmin">DATUM</th>
                <th class="colorAdmin">POGLEDAJ</th>
            </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->ime }}</td>
                <td>{{ $order->firma }}</td>
                <td>{{ $order->telefon }}</td>
                <td>{{ $order->mail }}</td>
                <td>{{ $order->datum }}</td>
                <td>
                    <button
                        class="btn btn-primary btn-sm buttonAdmin"
                        data-bs-toggle="modal"
                        data-bs-target="#orderModal"
                        data-id="{{ $order->id }}"
                        data-ime="{{ $order->ime }}"
                        data-firma="{{ $order->firma }}"
                        data-telefon="{{ $order->telefon }}"
                        data-mail="{{ $order->mail }}"
                        data-datum="{{ $order->datum }}"

                        data-tipKese="{{ $order->vrsta_kese }}"
                        data-materijal="{{ $order->materijal }}"
                        data-sirina="{{ $order->sirina }}"
                        data-visina="{{ $order->visina }}"
                        @if($order->boja_rucke)
                            data-bojaRucke="{{ $order->boja_rucke }}"
                        @endif
                        data-bojaKese="{{ $order->boja_kese }}"
                        data-priprema="{{ $order->fajl1 }}"
                        data-stampa="{{ $order->vrsta_stampe }}"
                        data-kolicina="{{ $order->kolicina }}"
                    >
                        Detalji
                    </button>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{ $orders->links() }}
</div>



<!-- Order Details Modal -->
<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="orderModalLabel">Detalji Porudžbine</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zatvori"></button>
            </div>
            <div class="modal-body">
                <p><strong>ID:</strong> <span id="modal-order-id"></span></p>
                <p><strong>Ime:</strong> <span id="modal-order-ime"></span></p>
                <p><strong>Firma:</strong> <span id="modal-order-firma"></span></p>
                <p><strong>Telefon:</strong> <span id="modal-order-telefon"></span></p>
                <p><strong>Email:</strong> <span id="modal-order-mail"></span></p>
                <p><strong>Datum:</strong> <span id="modal-order-datum"></span></p>

                <hr class="hrBasic">

                <p><strong>Tip Kese:</strong> <span id="modal-order-tipKese"></span></p>
                <p><strong>Materijal:</strong> <span id="modal-order-materijal"></span></p>
                <p><strong>Širina:</strong> <span id="modal-order-sirina"></span></p>
                <p><strong>Visina:</strong> <span id="modal-order-visina"></span></p>
                <p><strong>Boja Kese:</strong> <span id="modal-order-bojaKese"></span></p>
                <p><strong>Boja Ručke:</strong> <span id="modal-order-bojaRucke"></span></p>
                <p><strong>Vrsta Štampe:</strong> <span id="modal-order-stampa"></span></p>
                <p><strong>Količina:</strong> <span id="modal-order-kolicina"></span></p>
                <p><strong>Fajl za Pripremu:</strong> <span id="modal-order-priprema"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
            </div>
        </div>
    </div>
</div>

<script>

</script>
@endsection
