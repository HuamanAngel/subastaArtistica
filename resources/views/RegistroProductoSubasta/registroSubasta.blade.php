@extends('layouts.app')


@section('cont_cabe')
    <title>Registrar y Subastar</title>

@endsection

@section('contenidoJS')
    <!-- Colocar js-->
@endsection

@section('contenidoCSS')
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Merriweather:ital,wght@1,300;1,400;1,700&display=swap" rel="stylesheet">
    
@endsection


@section('contenido')

<div class="container-md border rounded-lg cuerpo">
    <h1 class="text-center">Subastar producto</h1>

    <p id="parrafo">Ingrese la información de su pintura</p>
    <div class="row">
        
        <!-- Aquí va la información del producto -->
        <div class="col-sm-12 col-md-6 colum">
            <h2>Información del producto</h2>
            <br/>
            <form class="needs-validation" method="POST" enctype="multipart/form-data"  action="{{ route('producto.registroee')}}" novalidate>
                {{csrf_field()}}
                @csrf
                <div class="col-sm-12">
                    <label for="formGroupExampleInput"><h3>Categoría</h3></label><br>
                    <small>Escoja su categoría</small>
                    <select name="categoria_id" class="form-control" required>
                        @foreach(App\Models\Categoria::all() as $categoria)
                            @if($categoria->id == 1)
                                <option value="{{ $categoria->id }}" selected>{{ $categoria->nombre_categoria }}</option>                        
                            @else
                                <option value="{{ $categoria->id }}">{{ $categoria->nombre_categoria }}</option>                        
                            @endif
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        Seleccione una categoría
                    </div>
                    <br>
                    <div class="linea"></div>
                </div>
        
                <div class="col-sm-12">
                    <label for="formGroupExampleInput"><h3>Título</h3></label><br>
                    @error('nombre_producto')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Describe tu producto en al menos en 8 caracteres
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @enderror
                    <small>Un buen título atrae más miradas</small>
                    <input type="text" name="nombre_producto" value="{{ old('nombre_producto') }}" class="form-control" id="titulo" placeholder="Nombre del producto" required>
                    <div class="invalid-feedback">
                        Por favor, inserte un título
                    </div>
                    <div class="valid-feedback">
                        ¡Bien!
                    </div>
                    <br/>
                    <div class="linea"></div>
                </div>
        
                <div class="col-sm-12">
                    <h3>Descripción</h3>
                    @error('descripcion')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Brinda una mejor descripción de tu producto
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @enderror
                    <small>Brinda todos los detalles de tu producto aquí</small>
                    <textarea input name="descripcion" id="" class="form-control" cols="30" rows="4" placeholder="Añade una descripción" required>{{ old('descripcion') }}</textarea>
                    <div class="invalid-feedback">
                        Es necesaria una descripción
                    </div>
                    <br/>
                    <div class="linea"></div>
                </div>
                
                <div class="col-sm-12">
                    {{-- <h3>Estado</h3> --}}
                    <input type="hidden" name="estado" value="Disponible">
                    {{-- <select class="form-control" name="estado">
                        <option value="Disponible" selected>Disponible</option> 
                        <option value="No disponible">No disponible</option>
                        <option value="En curso">En curso</option>
                    </select>
                    <br/> --}}
                    <div class="linea"></div>
                </div>
            
                <div class="col-sm-12">
                    {{-- <h3>Condicion</h3> --}}
                    <input type="hidden" name="condicion" value="Nuevo">
                    {{-- <select class="form-control" name="condicion">
                        <option value="Nuevo" selected>Nuevo</option> 
                        <option value="Usado">Usado</option>
                    </select> --}}
                    <br>
                    <div class="linea"></div>
                </div> 
                <div class="col-sm-12">
                    <h3>Agregar fotos</h3>
                    <small class="form-text text-muted">Una imagen vale más que mil palabras</small>
                    @error('image_name1')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <small>Solo se acepta imagen con formato JPEG,BMP,JPG o PNG (máx 6MB)</small>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                    <div class="form-group">
                        <input type="file" name="image_name1" class="form-control" id="name1" value="" required>
                    </div>

                    @error('image_name2')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <small>Solo se acepta imagen con formato JPEG,BMP,JPG o PNG (máx 6MB)</small>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                    <div class="form-group">
                        <input type="file" name="image_name2" class="form-control" id="name2" value="" required>
                    </div>

                    @error('image_name3')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <small>Solo se acepta imagen con formato JPEG,BMP,JPG o PNG (máx 6MB)</small>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                    <div class="form-group">
                        <input type="file" name="image_name3" class="form-control" id="name3" value="" required>
                    </div>

                    @error('image_name4')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <small>Solo se acepta imagen con formato JPEG,BMP,JPG o PNG (máx 6MB)</small>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                    <div class="form-group">
                        <input type="file" name="image_name4" class="form-control" id="name4" value="" required>
                    </div>      
                    <br/>
                    <div class="linea"></div>
                </div>  

        </div>
        
        <!--Columna separadora
        <div class="col-1 d-none d-lg-block">

        </div>-->

        <!-- Esta es la información de la subasta 
        <div class="col-sm-12 col-md-6 col-lg-5">-->
        <div class="col-sm-12 col-md-6 colum">
            <h2>Información de la subasta</h2>
            <br/>
            <div>
                <label for="formGroupExampleInput"><h3>Precio inicial</h3></label>
                <small class="form-text text-muted">Ingrese la cantidad en Soles (S/) y máximo con dos decimales. Ejemplo: 25.50</small>
                @error('precio_inicial')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Por favor ingrese un precio
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @enderror
                <input type="text" name="precio_inicial" value="{{ old('precio_inicial') }}" class="form-control" id="precioInicial" placeholder="Precio mínimo 10.00 - Precio máximo 999999.00" required>
                <div class="invalid-feedback">
                    Not nice >:v
                </div>
                <div class="valid-feedback">
                    Nice!
                </div>
                <br/>
                <div class="linea"></div>
            </div>
            
            <div class="row">
                
                <div class="col-6">
                    <div>
                        <label for="formGroupExampleInput"><h3>Inicio subasta</h3></label><br>
                        @error('inicio_subasta')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Fecha requerida
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        @enderror
                        <input type="date" class="form-control" value="{{ old('inicio_subasta') }}" name="inicio_subasta" min="2020-11-02" id="fechaInicio" required>
                        <div class="invalid-feedback">
                            Seleccione una fecha
                        </div>
                        <div class="valid-feedback">
                            ¡Bien!
                        </div>
                        <br/>
                        <div class="linea"></div>
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <label for="formGroupExampleInput"><h3>Fin subasta</h3></label><br>
                        @error('final_subasta')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Fecha de fin no valida
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @enderror
                        <input type="date" class="form-control" name="final_subasta" min="2020-11-02" value="{{ old('final_subasta') }}" id="fechaInicioF" required>
                        <div class="invalid-feedback">
                            Seleccione una fecha
                        </div>
                        <div class="valid-feedback">
                            ¡Bien!
                        </div>
                        <div class="linea"></div>
                    </div>
                </div>
            </div>
    
            <div>
                <h3>Departamento</h3>
                <select name="selectDepartamento" onchange="cambia()" id="departamento" class="form-control" required="">
                    <option value="">Seleccione</option>
                    <option value="Amazonas">Amazonas</option>
                    <option value="Ancash">Ancash</option>
                    <option value="Apurímac">Apurímac</option>
                    <option value="Arequipa">Arequipa</option>
                    <option value="Ayacucho">Ayacucho</option>
                    <option value="Cajamarca">Cajamarca</option>
                    <option value="Callao">Callao</option>
                    <option value="Cuzco">Cuzco </option>
                    <option value="Huancavelica">Huancavelica</option>
                    <option value="Huánuco">Huánuco</option>
                    <option value="Ica">Ica</option>
                    <option value="Junín">Junín</option>
                    <option value="La_Libertad">La Libertad</option>
                    <option value="Lambayeque">Lambayeque</option>
                    <option value="Lima" selected>Lima</option>
                    <option value="Loreto">Loreto</option>
                    <option value="Madre_de_Dios">Madre de Dios</option>
                    <option value="Moquegua">Moquegua</option>
                    <option value="Pasco">Pasco</option>
                    <option value="Piura">Piura</option>
                    <option value="Puno">Puno</option>
                    <option value="San_Martín">San Martín</option>
                    <option value="Tacna">Tacna</option>
                    <option value="Tumbes">Tumbes</option>
                    <option value="Ucayali">Ucayali</option>
                </select><br>
                
            </div>

            <div>
                <h3>Ubicación</h3>
                <small>Marque una ubicación en el mapa</small>
                @error('latitud')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Marca en el mapa alguna dirección
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                @enderror
                <div id="inputmapa" style="height: 300px; width:100%;"></div>
                <input type="number" class="" name="latitud" id="latitud" style="display:none">
                <input type="number" class="" name= "longitud" id="longitud" style="display:none">
                @error('distrito')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Añade una dirección adicional
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                @enderror
                <input type="text" name="distrito" value="{{ old('distrito') }}" class="form-control mt-2 mb-4" placeholder="Ubicación adicional">
            </div>

            <div>
                <h3>Garantía</h3>
                @error('garantia')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    De no brindar garantía puedes escribir "Sin garantía"
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @enderror
                <small class="form-text text-muted">Brinda detalles de tu garantía</small>
                <textarea input id="validationCustom05" name="garantia" id="" class="form-control" cols="30" rows="3" placeholder="Detalla la garantía" required>{{ old('garantia') }}</textarea>
                <br>
            </div>
    
            <div id="center">
            
                <div id="siguiente">
                    <button type="submit" class="btn btn-success btn-block">Registrar y Subastar Producto</button>
                </div>
                <br/>
            </div>
            </form>
            <a href="{{ url('/menuSubasta') }}" class="btn btn-danger btn-block" style="text-decoration: none; color:white;">Cancelar</a>
        </div>
    </div>
</div>



@endsection

@section('contenidoJSabajo')
    <!-- Colocar js abajo-->
    <script src="{{ asset('js/producto.js') }}"></script>
    <script src="/js/mapa.js"></script>
@endsection
