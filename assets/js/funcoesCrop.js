window.addEventListener('DOMContentLoaded', function () {
    var avatar = document.getElementById('avatar');
    var image = document.getElementById('image');
    var input = document.getElementById('input');
    //var $progress = $('.progress');
    //var $progressBar = $('.progress-bar');
    var $alert = $('.alert');
    var $modal = $('#modal');
    var cropper;

     $('[data-toggle="tooltip"]').tooltip();

    input.addEventListener('change', function (e) {
        var files = e.target.files;
        var done = function (url) {
          input.value = '';
          image.src = url;
          $alert.hide();
          $modal.modal('show');
        };
        var reader;
        var file;
        var url;

        if (files && files.length > 0) {
          file = files[0];

          if (URL) {
            done(URL.createObjectURL(file));
          } else if (FileReader) {
            reader = new FileReader();
            reader.onload = function (e) {
                console.log(e);
              done(reader.result);
            };
            reader.readAsDataURL(file);
          }
        }
    });

    $modal.on('shown.bs.modal', function () {
        cropper = new Cropper(image, {
            viewMode: 1,
            dragMode: 'move',
            aspectRatio: 21.52 / 9, // 600x251
            // aspectRatio: 8.8 / 7, // 280x222
            autoCropArea: 2,
            restore: false,
            guides: false,
            center: false,
            highlight: false,
            cropBoxMovable: false,
            cropBoxResizable: false,
            toggleDragModeOnDblclick: false
        });
    }).on('hidden.bs.modal', function () {
        cropper.destroy();
        cropper = null;
    });

    document.getElementById('crop').addEventListener('click', function () {
        var initialAvatarURL;
        var canvas;

        $modal.modal('hide');

        if (cropper) {
            canvas = cropper.getCroppedCanvas({
                width: 600,
                height: 255,
            });
            initialAvatarURL = avatar.src;
            avatar.src = canvas.toDataURL();
            var imagem = $("#avatar").attr('src');
            $("#imagem1").attr("value", imagem);
            console.log(imagem);
            // $progress.show();
            $alert.removeClass('alert-success alert-warning');
            canvas.toBlob(function (blob) {
                var formData = new FormData();
            });
        }
    });
});

window.addEventListener('DOMContentLoaded', function () {
    var avatar = document.getElementById('avatar2');
    var image = document.getElementById('image2');
    var input = document.getElementById('input2');
    //var $progress = $('.progress');
    //var $progressBar = $('.progress-bar');
    var $alert = $('.alert');
    var $modal = $('#modal2');
    var cropper;

     $('[data-toggle="tooltip"]').tooltip();

    input.addEventListener('change', function (e) {
        var files = e.target.files;
        var done = function (url) {
          input.value = '';
          image.src = url;
          $alert.hide();
          $modal.modal('show');
        };
        var reader;
        var file;
        var url;

        if (files && files.length > 0) {
          file = files[0];

          if (URL) {
            done(URL.createObjectURL(file));
          } else if (FileReader) {
            reader = new FileReader();
            reader.onload = function (e) {
              done(reader.result);
            };
            reader.readAsDataURL(file);
          }
        }
    });

    $modal.on('shown.bs.modal', function () {
        cropper = new Cropper(image, {
            viewMode: 1,
            dragMode: 'move',
            //aspectRatio: 21.52 / 9, // 600x251
            aspectRatio: 8.8 / 7, // 280x222
            autoCropArea: 2,
            restore: false,
            guides: false,
            center: false,
            highlight: false,
            cropBoxMovable: false,
            cropBoxResizable: false,
            toggleDragModeOnDblclick: false
        });
    }).on('hidden.bs.modal', function () {
        cropper.destroy();
        cropper = null;
    });

    document.getElementById('crop2').addEventListener('click', function () {
        var initialAvatarURL;
        var canvas;

        $modal.modal('hide');

        if (cropper) {
            canvas = cropper.getCroppedCanvas({
                width: 280,
                height: 222,
            });
            initialAvatarURL = avatar.src;
            avatar.src = canvas.toDataURL();
            var imagem = $("#avatar2").attr('src');
            $("#imagem2").attr("value", imagem);
            console.log(imagem);
            //$progress.show();
            $alert.removeClass('alert-success alert-warning');
            canvas.toBlob(function (blob) {
                var formData = new FormData();
            });
        }
    });
});

window.addEventListener('DOMContentLoaded', function () {
    var avatar = document.getElementById('avatar3');
    var image = document.getElementById('image3');
    var input = document.getElementById('input3');
    //var $progress = $('.progress');
    //var $progressBar = $('.progress-bar');
    var $alert = $('.alert');
    var $modal = $('#modal3');
    var cropper;

     $('[data-toggle="tooltip"]').tooltip();

    input.addEventListener('change', function (e) {
        var files = e.target.files;
        var done = function (url) {
          input.value = '';
          image.src = url;
          $alert.hide();
          $modal.modal('show');
        };
        var reader;
        var file;
        var url;

        if (files && files.length > 0) {
          file = files[0];

          if (URL) {
            done(URL.createObjectURL(file));
          } else if (FileReader) {
            reader = new FileReader();
            reader.onload = function (e) {
              done(reader.result);
            };
            reader.readAsDataURL(file);
          }
        }
    });

    $modal.on('shown.bs.modal', function () {
        cropper = new Cropper(image, {
            viewMode: 1,
            dragMode: 'move',
            //aspectRatio: 21.52 / 9, // 600x251
            aspectRatio: 8.8 / 7, // 280x222
            autoCropArea: 2,
            restore: false,
            guides: false,
            center: false,
            highlight: false,
            cropBoxMovable: false,
            cropBoxResizable: false,
            toggleDragModeOnDblclick: false
        });
    }).on('hidden.bs.modal', function () {
        cropper.destroy();
        cropper = null;
    });

    document.getElementById('crop3').addEventListener('click', function () {
        var initialAvatarURL;
        var canvas;

        $modal.modal('hide');

        if (cropper) {
            canvas = cropper.getCroppedCanvas({
                width: 280,
                height: 222,
            });
            initialAvatarURL = avatar.src;
            avatar.src = canvas.toDataURL();
            var imagem = $("#avatar3").attr('src');
            $("#imagem3").attr("value", imagem);
            console.log(imagem);
            //$progress.show();
            $alert.removeClass('alert-success alert-warning');
            canvas.toBlob(function (blob) {
                var formData = new FormData();
            });
        }
    });
});

window.addEventListener('DOMContentLoaded', function () {
    var avatar = document.getElementById('avatar4');
    var image = document.getElementById('image4');
    var input = document.getElementById('input4');
    //var $progress = $('.progress');
    //var $progressBar = $('.progress-bar');
    var $alert = $('.alert');
    var $modal = $('#modal4');
    var cropper;

     $('[data-toggle="tooltip"]').tooltip();

    input.addEventListener('change', function (e) {
        var files = e.target.files;
        var done = function (url) {
          input.value = '';
          image.src = url;
          $alert.hide();
          $modal.modal('show');
        };
        var reader;
        var file;
        var url;

        if (files && files.length > 0) {
          file = files[0];

          if (URL) {
            done(URL.createObjectURL(file));
          } else if (FileReader) {
            reader = new FileReader();
            reader.onload = function (e) {
              done(reader.result);
            };
            reader.readAsDataURL(file);
          }
        }
    });

    $modal.on('shown.bs.modal', function () {
        cropper = new Cropper(image, {
            viewMode: 1,
            dragMode: 'move',
            //aspectRatio: 21.52 / 9, // 600x251
            aspectRatio: 8.8 / 7, // 280x222
            autoCropArea: 2,
            restore: false,
            guides: false,
            center: false,
            highlight: false,
            cropBoxMovable: false,
            cropBoxResizable: false,
            toggleDragModeOnDblclick: false
        });
    }).on('hidden.bs.modal', function () {
        cropper.destroy();
        cropper = null;
    });

    document.getElementById('crop4').addEventListener('click', function () {
        var initialAvatarURL;
        var canvas;

        $modal.modal('hide');

        if (cropper) {
            canvas = cropper.getCroppedCanvas({
                width: 280,
                height: 222,
            });
            initialAvatarURL = avatar.src;
            avatar.src = canvas.toDataURL();
            var imagem = $("#avatar4").attr('src');
            $("#imagem4").attr("value", imagem);
            console.log(imagem);
            //$progress.show();
            $alert.removeClass('alert-success alert-warning');
            canvas.toBlob(function (blob) {
                var formData = new FormData();
            });
        }
    });
});

window.addEventListener('DOMContentLoaded', function () {
    var avatar = document.getElementById('avatar5');
    var image = document.getElementById('image5');
    var input = document.getElementById('input5');
    //var $progress = $('.progress');
    //var $progressBar = $('.progress-bar');
    var $alert = $('.alert');
    var $modal = $('#modal5');
    var cropper;

     $('[data-toggle="tooltip"]').tooltip();

    input.addEventListener('change', function (e) {
        var files = e.target.files;
        var done = function (url) {
          input.value = '';
          image.src = url;
          $alert.hide();
          $modal.modal('show');
        };
        var reader;
        var file;
        var url;

        if (files && files.length > 0) {
          file = files[0];

          if (URL) {
            done(URL.createObjectURL(file));
          } else if (FileReader) {
            reader = new FileReader();
            reader.onload = function (e) {
              done(reader.result);
            };
            reader.readAsDataURL(file);
          }
        }
    });

    $modal.on('shown.bs.modal', function () {
        cropper = new Cropper(image, {
            viewMode: 1,
            dragMode: 'move',
            //aspectRatio: 21.52 / 9, // 600x251
            aspectRatio: 8.8 / 7, // 280x222
            autoCropArea: 2,
            restore: false,
            guides: false,
            center: false,
            highlight: false,
            cropBoxMovable: false,
            cropBoxResizable: false,
            toggleDragModeOnDblclick: false
        });
    }).on('hidden.bs.modal', function () {
        cropper.destroy();
        cropper = null;
    });

    document.getElementById('crop5').addEventListener('click', function () {
        var initialAvatarURL;
        var canvas;

        $modal.modal('hide');

        if (cropper) {
            canvas = cropper.getCroppedCanvas({
                width: 280,
                height: 222,
            });
            initialAvatarURL = avatar.src;
            avatar.src = canvas.toDataURL();
            var imagem = $("#avatar5").attr('src');
            $("#imagem5").attr("value", imagem);
            console.log(imagem);
            //$progress.show();
            $alert.removeClass('alert-success alert-warning');
            canvas.toBlob(function (blob) {
                var formData = new FormData();
            });
        }
    });
});