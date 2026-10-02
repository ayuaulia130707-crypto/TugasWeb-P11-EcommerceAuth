@if (session('success'))
    <div style="padding: 12px; margin-bottom: 20px; background: #d4edda; color: #155724; border-radius: 5px;">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div style="padding: 12px; margin-bottom: 20px; background: #f8d7da; color: #721c24; border-radius: 5px;">
        {{ session('error') }}
    </div>
@endif

@if ($errors->any())
    <div style="padding: 12px; margin-bottom: 20px; background: #f8d7da; color: #721c24; border-radius: 5px;">
        Periksa kembali data yang kamu masukkan.
    </div>
@endif
