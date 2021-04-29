@push('css')
	@include('datatables.datatables-css')
@endpush
<table id="tabel-detail" class="table table-hover table-sm table-sm-responsive" style="width:100%">
    <thead class="bg-info">
        <tr>
            <th>#</th>
            <th>NAMA PENGUNJUNG</th>
            <th>NIK</th>
            <th>ALAMAT PENGUNJUNG</th>
            <th>NO HANDPHONE</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>

@push('scripts')
    @include('datatables.datatables-js')
@endpush