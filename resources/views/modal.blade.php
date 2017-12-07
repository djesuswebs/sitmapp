  <?php if ($articulosView->img_articulo == NULL) {?>
          <div style="padding-left: 324px;">

            <img  height="443"  src="../../../public/storage/articulos_default.png" class="" data-toggle="modal" data-target="#{{$articulosView->id_articulo}}" alt="Imagen Articulo ">
          </div>           
       <?php } else {?>
                         
          <img  height="443"  src="../../../public/storage/{{$articulosView->img_articulo}}" data-toggle="modal" data-target="#{{$articulosView->id_articulo}}" class="openBtn__{{ $articulosView->id_articulo }}" id="myBtn_{{ $articulosView->id_articulo }}"  alt="Imagen Articulo">

      <?php } ?>