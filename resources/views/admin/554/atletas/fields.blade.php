<!-- Sobre Nome Field -->
<div class="form-group col-sm-12">
    {!! Form::label('sobre_nome', 'Sobre Nome:') !!}
    {!! Form::text('sobre_nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Idade Field -->
<div class="form-group col-sm-12">
    {!! Form::label('idade', 'Idade:') !!}
    {!! Form::text('idade', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Sanguineo Field -->
<div class="form-group col-sm-12">
    {!! Form::label('tipo_sanguineo', 'Tipo Sanguineo:') !!}
    {!! Form::text('tipo_sanguineo', null, ['class' => 'form-control']) !!}
</div>

<!-- Data De Nascimento Field -->
<div class="form-group col-sm-12">
    {!! Form::label('data_de_nascimento', 'Data De Nascimento:') !!}
    {!! Form::text('data_de_nascimento', null, ['class' => 'form-control']) !!}
</div>

<!-- C P F Field -->
<div class="form-group col-sm-12">
    {!! Form::label('c_p_f', 'C P F:') !!}
    {!! Form::text('c_p_f', null, ['class' => 'form-control']) !!}
</div>

<!-- R G Field -->
<div class="form-group col-sm-12">
    {!! Form::label('r_g', 'R G:') !!}
    {!! Form::text('r_g', null, ['class' => 'form-control']) !!}
</div>

<!-- Grau Ensino Field -->
<div class="form-group col-sm-12">
    {!! Form::label('grau_ensino', 'Grau Ensino:') !!}
    {!! Form::text('grau_ensino', null, ['class' => 'form-control']) !!}
</div>

<!-- Instituicao Field -->
<div class="form-group col-sm-12">
    {!! Form::label('instituicao', 'Instituicao:') !!}
    {!! Form::text('instituicao', null, ['class' => 'form-control']) !!}
</div>

<!-- Ala Field -->
<div class="form-group col-sm-12">
    {!! Form::label('ala', 'Ala:') !!}
    {!! Form::text('ala', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.554.atletas.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
