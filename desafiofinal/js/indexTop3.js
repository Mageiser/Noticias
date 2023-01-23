$.getJSON('listarProdutoTop3.php').done(json => {
    if(json['status'] == 'sucesso') {
        let html = '';
        json['dados'].forEach(element => {
          html += '  <div class="carousel-item active">\
          <picture>\
              <source media="(max-width: 768px)" srcset="'+ element['imagem'] +'"  >\
              <img src="upload/'+ element['imagem'] +'" alt="Imagem 1" class="d-block w-100" />\
          </picture>\
          <div class="carousel-caption">\
              <h5 class="display-5 fw-bold">'+ element['titulo'] +'</h5>\
              <p>'+ element['subtitulo'] +'</p>\
          </div>\
        </div>'
        });
        $('#carrosel-lista').append(html);
    }
  }).fail(()=> {
    $('#carrosel-lista').append('<div class="col-12"><p class="text-danger text-center">Não foi possível carregar as notícias</p></div>');
  })

