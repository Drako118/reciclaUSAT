<div class="row">
    <div class="form-group col-8">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el nombre de la marca',
            'required',
        ]) !!}
    </div>
    <div class="form-group col-4">
        {!! Form::label('code', 'Código') !!}
        {!! Form::text('code', null, [
            'class' => 'form-control',
            'placeholder' => 'Código',
            'required',
        ]) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-6">
        {!! Form::label('brand', 'Marca') !!}
        {!! Form::select('brand_id', $brands, null, [
            'class' => 'form-control',
            'id' => 'brand_id',
        ]) !!}
    </div>
    <div class="form-group col-6">
        {!! Form::label('model', 'Modelo') !!}
        {!! Form::select('model_id', $models, null, [
            'class' => 'form-control',
            'id' => 'model_id',
        ]) !!}
    </div>
</div>


<div class="form-group">
    {!! Form::label('description', 'Descripción') !!}
    {!! Form::textarea('description', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingrese la descripción',
    ]) !!}
</div>

<script>
    $('#brand_id').change(function() {
        var id = $(this).val();
        $.ajax({
            url: "{{ route('admin.modelsbybrand', '_id') }}".replace('_id', id),
            type: "GET",
            datatype: "JSON",
            success: function(response) {
                $('#model_id').empty();
                $.each(response, function(key, value) {
                    $('#model_id').append('<option value=' + value.id + '>' + value.name +
                        '</option>');
                });

            }
        });
    })
</script>
