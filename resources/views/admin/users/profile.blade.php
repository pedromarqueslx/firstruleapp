@extends('layouts.menu')
@section('content')

<h1>{{$user->name }}</h1>

<div class="card">

    <div class="card-block px-3 py-4">
        <form method="post" action="{{route('user.profile.update', $user)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <h2 class="">Identificação</h2>

            <div class="row mb-2">
                <div class="col-md-3 mb-2 required">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{$user->name}}" >
                </div>
                <div class="col-md-3 mb-2 required">
                    <label for="email">E-mail</label>
                    <input class="form-control" name="email" id="email" value="{{$user->email}}" required="">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                     </span>
                    @enderror
                </div>
                <div class="col-md-3 mb-2 required">
                    <label for="password">Alterar senha</label>
                    <input type="password" class="form-control" name="password" id="password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-3 mb-2 required">
                    <label for="password_confirmation">Confirmar alteração da senha</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <h2 class="mt-3">Tipo de Atividade</h2>

            <div class="row mb-2">
                <div class="col-md-4 mb-2 required">
                    <label for="tipo_entidade">Tipo de entidade</label>
                    <select id="tipo_entidade" class="form-control" name="tipo_entidade" required="">
                        <option selected value="{{$user->tipo_entidade}}">{{$user->tipo_entidade}}</option>
                        <option value="Autarquia local">Autarquia local</option>
                        <option value="Concessionária">Concessionária</option>
                        <option value="Empresa de comunicações">Empresa de comunicações</option>
                        <option value="Empresa pública">Empresa pública</option>
                        <option value="Entidades que detém infraestruturas para alojamento de redes">Entidades que detém infraestruturas para alojamento de redes</option>
                        <option value="Entidade reguladora sectorial">Entidade reguladora sectorial</option>
                        <option value="Entidade sujeita à tutela do Estado">Entidade sujeita à tutela do Estado</option>
                        <option value="Estado">Estado</option>
                        <option value="Outra entidade que detém ou explore infraestruturas que integrem domínio público do Estado">Outra entidade que detém ou explore infraestruturas que integrem domínio público do Estado</option>
                        <option value="Região autónoma">Região autónoma</option>
                    </select>
                    @error('tipo_entidade')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-4 mb-2 required">
                    <label for="sector_atividade">Sector de atividade</label>
                    <select id="sector_atividade" class="form-control" name="sector_atividade" required="">
                        <option selected value="{{$user->sector_atividade}}">{{$user->sector_atividade}}</option>
                        <option value="A - Agricultura, produção animal, caça, floresta e pesca">A - Agricultura, produção animal, caça, floresta e pesca</option>
                        <option value="B - Indústrias extractivas">B - Indústrias extractivas</option>
                        <option value="C - Indústrias transformadoras">C - Indústrias transformadoras</option>
                        <option value="D - Electricidade, gás, vapor, água quente e fria e ar frio">D - Electricidade, gás, vapor, água quente e fria e ar frio</option>
                        <option value="E - Captação, tratamento e distribuição de água; saneamento, gestão de resíduos e despoluição">E - Captação, tratamento e distribuição de água; saneamento, gestão de resíduos e despoluição</option>
                        <option value="F - Construção">F - Construção</option>
                        <option value="G - Comércio por grosso e a retalho; reparação de veículos automóveis e motociclos">G - Comércio por grosso e a retalho; reparação de veículos automóveis e motociclos</option>
                        <option value="H - Transportes e armazenagem">H - Transportes e armazenagem</option>
                        <option value="I - Alojamento, restauração e similares">I - Alojamento, restauração e similares</option>
                    </select>
                    @error('sector_atividade')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-3 mb-2 required">
                    <label for="codigo_certidao">Código de acesso à certidão permanente</label>
                    <input id="codigo_certidao" type="text" class="form-control" name="codigo_certidao" value="{{$user->codigo_certidao}}" >
                    @error('codigo_certidao')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-3 mb-3 required">
                    <label for="morada">Morada</label>
                    <input type="text" class="form-control" name="morada" id="morada" value="{{$user->morada}}">
                    @error('morada')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-2 mb-2 required">
                    <label for="codigo_postal">Código Postal</label>
                    <input id="codigo_postal" type="text" class="form-control" name="codigo_postal" value="{{$user->codigo_postal}}" required >
                    @error('codigo_postal')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-3 mb-3 required">
                    <label for="contribuinte">Nº Contribuinte</label>
                    <input class="form-control" name="contribuinte" id="contribuinte" value="{{$user->contribuinte}}">
                    @error('contribuinte')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-3 mb-3 required">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" name="telefone" id="telefone" value="{{$user->telefone}}">
                    @error('telefone')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-3 mb-2 required">
                    <label for="pais">País</label>
                    <select class="form-control" name="pais" id="pais" >
                        <option value="{{$user->pais}}">{{$user->pais}}</option>
                        <option value="Afeganistão">Afeganistão</option>
                        <option value="África do Sul">África do Sul</option>
                        <option value="Albânia">Albânia</option>
                        <option value="Alemanha">Alemanha</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antilhas Holandesas">Antilhas Holandesas</option>
                        <option value="Antárctida">Antárctida</option>
                        <option value="Antígua e Barbuda">Antígua e Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Argélia">Argélia</option>
                        <option value="Armênia">Armênia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Arábia Saudita">Arábia Saudita</option>
                        <option value="Austrália">Austrália</option>
                        <option value="Áustria">Áustria</option>
                        <option value="Azerbaijão">Azerbaijão</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrein">Bahrein</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belize">Belize</option>
                        <option value="Benim">Benim</option>
                        <option value="Bermudas">Bermudas</option>
                        <option value="Bielorrússia">Bielorrússia</option>
                        <option value="Bolívia">Bolívia</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brasil">Brasil</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgária">Bulgária</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Butão">Butão</option>
                        <option value="Bélgica">Bélgica</option>
                        <option value="Bósnia e Herzegovina">Bósnia e Herzegovina</option>
                        <option value="Cabo Verde">Cabo Verde</option>
                        <option value="Camarões">Camarões</option>
                        <option value="Camboja">Camboja</option>
                        <option value="Canadá">Canadá</option>
                        <option value="Catar">Catar</option>
                        <option value="Cazaquistão">Cazaquistão</option>
                        <option value="Chade">Chade</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Chipre">Chipre</option>
                        <option value="Colômbia">Colômbia</option>
                        <option value="Comores">Comores</option>
                        <option value="Coreia do Norte">Coreia do Norte</option>
                        <option value="Coreia do Sul">Coreia do Sul</option>
                        <option value="Costa do Marfim">Costa do Marfim</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Croácia">Croácia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Dinamarca">Dinamarca</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Egito">Egito</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Emirados Árabes Unidos">Emirados Árabes Unidos</option>
                        <option value="Equador">Equador</option>
                        <option value="Eritreia">Eritreia</option>
                        <option value="Escócia">Escócia</option>
                        <option value="Eslováquia">Eslováquia</option>
                        <option value="Eslovênia">Eslovênia</option>
                        <option value="Espanha">Espanha</option>
                        <option value="Estados Federados da Micronésia">Estados Federados da Micronésia</option>
                        <option value="Estados Unidos">Estados Unidos</option>
                        <option value="Estônia">Estônia</option>
                        <option value="Etiópia">Etiópia</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Filipinas">Filipinas</option>
                        <option value="Finlândia">Finlândia</option>
                        <option value="França">França</option>
                        <option value="Gabão">Gabão</option>
                        <option value="Gana">Gana</option>
                        <option value="Geórgia">Geórgia</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Granada">Granada</option>
                        <option value="Gronelândia">Gronelândia</option>
                        <option value="Grécia">Grécia</option>
                        <option value="Guadalupe">Guadalupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guernesei">Guernesei</option>
                        <option value="Guiana">Guiana</option>
                        <option value="Guiana Francesa">Guiana Francesa</option>
                        <option value="Guiné">Guiné</option>
                        <option value="Guiné Equatorial">Guiné Equatorial</option>
                        <option value="Guiné-Bissau">Guiné-Bissau</option>
                        <option value="Gâmbia">Gâmbia</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungria">Hungria</option>
                        <option value="Ilha Bouvet">Ilha Bouvet</option>
                        <option value="Ilha de Man">Ilha de Man</option>
                        <option value="Ilha do Natal">Ilha do Natal</option>
                        <option value="Ilha Heard e Ilhas McDonald">Ilha Heard e Ilhas McDonald</option>
                        <option value="Ilha Norfolk">Ilha Norfolk</option>
                        <option value="Ilhas Cayman">Ilhas Cayman</option>
                        <option value="Ilhas Cocos (Keeling)">Ilhas Cocos (Keeling)</option>
                        <option value="Ilhas Cook">Ilhas Cook</option>
                        <option value="Ilhas Feroé">Ilhas Feroé</option>
                        <option value="Ilhas Geórgia do Sul e Sandwich do Sul">Ilhas Geórgia do Sul e Sandwich do Sul</option>
                        <option value="Ilhas Malvinas">Ilhas Malvinas</option>
                        <option value="Ilhas Marshall">Ilhas Marshall</option>
                        <option value="Ilhas Menores Distantes dos Estados Unidos">Ilhas Menores Distantes dos Estados Unidos</option>
                        <option value="Ilhas Salomão">Ilhas Salomão</option>
                        <option value="Ilhas Virgens Americanas">Ilhas Virgens Americanas</option>
                        <option value="Ilhas Virgens Britânicas">Ilhas Virgens Britânicas</option>
                        <option value="Ilhas Åland">Ilhas Åland</option>
                        <option value="Indonésia">Indonésia</option>
                        <option value="Inglaterra">Inglaterra</option>
                        <option value="Índia">Índia</option>
                        <option value="Iraque">Iraque</option>
                        <option value="Irlanda do Norte">Irlanda do Norte</option>
                        <option value="Irlanda">Irlanda</option>
                        <option value="Irã">Irã</option>
                        <option value="Islândia">Islândia</option>
                        <option value="Israel">Israel</option>
                        <option value="Itália">Itália</option>
                        <option value="Iêmen">Iêmen</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japão">Japão</option>
                        <option value="Jersey">Jersey</option>
                        <option value="Jordânia">Jordânia</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Laos">Laos</option>
                        <option value="Lesoto">Lesoto</option>
                        <option value="Letônia">Letônia</option>
                        <option value="Libéria">Libéria</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lituânia">Lituânia</option>
                        <option value="Luxemburgo">Luxemburgo</option>
                        <option value="Líbano">Líbano</option>
                        <option value="Líbia">Líbia</option>
                        <option value="Macau">Macau</option>
                        <option value="Macedônia">Macedônia</option>
                        <option value="Madagáscar">Madagáscar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Maldivas">Maldivas</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Malásia">Malásia</option>
                        <option value="Marianas Setentrionais">Marianas Setentrionais</option>
                        <option value="Marrocos">Marrocos</option>
                        <option value="Martinica">Martinica</option>
                        <option value="Mauritânia">Mauritânia</option>
                        <option value="Maurícia">Maurícia</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Moldávia">Moldávia</option>
                        <option value="Mongólia">Mongólia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Moçambique">Moçambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="México">México</option>
                        <option value="Mônaco">Mônaco</option>
                        <option value="Namíbia">Namíbia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Nicarágua">Nicarágua</option>
                        <option value="Nigéria">Nigéria</option>
                        <option value="Niue">Niue</option>
                        <option value="Noruega">Noruega</option>
                        <option value="Nova Caledônia">Nova Caledônia</option>
                        <option value="Nova Zelândia">Nova Zelândia</option>
                        <option value="Níger">Níger</option>
                        <option value="Omã">Omã</option>
                        <option value="Palau">Palau</option>
                        <option value="Palestina">Palestina</option>
                        <option value="Panamá">Panamá</option>
                        <option value="Papua-Nova Guiné">Papua-Nova Guiné</option>
                        <option value="Paquistão">Paquistão</option>
                        <option value="Paraguai">Paraguai</option>
                        <option value="País de Gales">País de Gales</option>
                        <option value="Países Baixos">Países Baixos</option>
                        <option value="Peru">Peru</option>
                        <option value="Pitcairn">Pitcairn</option>
                        <option value="Polinésia Francesa">Polinésia Francesa</option>
                        <option value="Polônia">Polônia</option>
                        <option value="Porto Rico">Porto Rico</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Quirguistão">Quirguistão</option>
                        <option value="Quênia">Quênia</option>
                        <option value="Reino Unido">Reino Unido</option>
                        <option value="República Centro-Africana">República Centro-Africana</option>
                        <option value="República Checa">República Checa</option>
                        <option value="República Democrática do Congo">República Democrática do Congo</option>
                        <option value="República do Congo">República do Congo</option>
                        <option value="República Dominicana">República Dominicana</option>
                        <option value="Reunião">Reunião</option>
                        <option value="Romênia">Romênia</option>
                        <option value="Ruanda">Ruanda</option>
                        <option value="Rússia">Rússia</option>
                        <option value="Saara Ocidental">Saara Ocidental</option>
                        <option value="Saint Martin">Saint Martin</option>
                        <option value="Saint-Barthélemy">Saint-Barthélemy</option>
                        <option value="Saint-Pierre e Miquelon">Saint-Pierre e Miquelon</option>
                        <option value="Samoa Americana">Samoa Americana</option>
                        <option value="Samoa">Samoa</option>
                        <option value="Santa Helena, Ascensão e Tristão da Cunha">Santa Helena, Ascensão e Tristão da Cunha</option>
                        <option value="Santa Lúcia">Santa Lúcia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serra Leoa">Serra Leoa</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Singapura">Singapura</option>
                        <option value="Somália">Somália</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Suazilândia">Suazilândia</option>
                        <option value="Sudão">Sudão</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Suécia">Suécia</option>
                        <option value="Suíça">Suíça</option>
                        <option value="Svalbard e Jan Mayen">Svalbard e Jan Mayen</option>
                        <option value="São Cristóvão e Nevis">São Cristóvão e Nevis</option>
                        <option value="São Marino">São Marino</option>
                        <option value="São Tomé e Príncipe">São Tomé e Príncipe</option>
                        <option value="São Vicente e Granadinas">São Vicente e Granadinas</option>
                        <option value="Sérvia">Sérvia</option>
                        <option value="Síria">Síria</option>
                        <option value="Tadjiquistão">Tadjiquistão</option>
                        <option value="Tailândia">Tailândia</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tanzânia">Tanzânia</option>
                        <option value="Terras Austrais e Antárticas Francesas">Terras Austrais e Antárticas Francesas</option>
                        <option value="Território Britânico do Oceano Índico">Território Britânico do Oceano Índico</option>
                        <option value="Timor-Leste">Timor-Leste</option>
                        <option value="Togo">Togo</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Toquelau">Toquelau</option>
                        <option value="Trinidad e Tobago">Trinidad e Tobago</option>
                        <option value="Tunísia">Tunísia</option>
                        <option value="Turcas e Caicos">Turcas e Caicos</option>
                        <option value="Turquemenistão">Turquemenistão</option>
                        <option value="Turquia">Turquia</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Ucrânia">Ucrânia</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Uruguai">Uruguai</option>
                        <option value="Uzbequistão">Uzbequistão</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vaticano">Vaticano</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietname">Vietname</option>
                        <option value="Wallis e Futuna">Wallis e Futuna</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                        <option value="Zâmbia">Zâmbia</option>
                    </select>
                    @error('pais')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <h2 class="mt-3">Contatos para procedimento de registo</h2>

            <div class="row mb-2">
                <div class="col-md-3 mb-2">
                    <label for="nome_responsavel_operador">Nome do Responsável</label>
                    <input type="text" class="form-control" name="nome_responsavel_operador" id="nome_responsavel_operador" value="{{$user->nome_responsavel_operador}}">
                </div>
                <div class="col-md-3 mb-2">
                    <label for="email_responsavel_operador">E-mail do Responsável</label>
                    <input type="text" class="form-control" name="email_responsavel_operador" id="email_responsavel_operador" value="{{$user->email_responsavel_operador}}">
                </div>
                <div class="col-md-3 mb-2">
                    <label for="telefone_responsavel_operador">Telefone do Responsável</label>
                    <input type="text" class="form-control" name="telefone_responsavel_operador" id="telefone_responsavel_operador" value="{{$user->telefone_responsavel_operador}}">
                </div>
            </div>

            <p class="small"><a href="{{$user->anexos}}" target="_blank"><span class="pcoded-micon"><i class="feather icon-file-minus"></i></span> Anexo</a></p>
{{--
            <div class="row mb-2">
                <div class="col-md-3 mb-2">
                    <p><a href="{{$user->anexos}}" target="_blank">anexo</a></p>
                    <input type="file" class="" name="anexos">
                </div>
            </div>--}}

            <input type="submit" name="submit" value="Guardar" class="btn btn-success mx-auto d-block">

            {{-- <input name="_token" type="hidden" value="{{ csrf_token() }}"/> --}}

        </form>
        {{--
        <form method="post" action="/infraestruturas/{{$infraestruturas->id}}">
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" name="delete" value="Apagar pedido" class="btn btn-primary mx-auto d-block">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        </form>
        --}}

    </div>

    <!-- DataTales -->
    @if(auth()->user()->userHasRole('Admin'))
        <div class="card-block px-3 py-4">
        <h2 class="">Gestão de Acessos</h2>
        <div class="table-responsive">
            <table class="table table-bordered" id="users-table">
                <thead>
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th>Conceder Acesso</th>
                    <th>Remover Acesso</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th>Conceder Acesso</th>
                    <th>Remover Acesso</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($roles as $role)
                    <tr>
                        <td><input type="checkbox"
                                   @foreach($user->roles as $user_role)
                                   @if($user_role->slug == $role->slug)
                                   checked
                                    @endif
                                    @endforeach
                            ></td>
                        <td>{{$role->name}}</td>
                        <td>
                            <form method="post" action="{{route('user.role.attach', $user)}}">
                                @method('PUT')
                                @csrf
                                <input type="hidden" name="role" value="{{$role->id}}">
                                <button class="btn btn-primary" @if($user->roles->contains($role)) disabled @endif>Conceder</button>
                            </form>
                        </td>
                        <td>
                            <form method="post" action="{{route('user.role.detach', $user)}}">
                                @method('PUT')
                                @csrf
                                <input type="hidden" name="role" value="{{$role->id}}">
                                <button class="btn btn-primary" @if(!$user->roles->contains($role)) disabled @endif>Remover</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif

</div>

@endsection

@section('footer')
@stop
