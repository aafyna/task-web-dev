$("document").ready(function(){

    //Ayam
    $("input#ayam").click(function () {
        $("audio#ayam").attr({
            'src': "audio/ayam.mp3",
            'autoplay': "autoplay"
        }).appendTo("body");
    }); 

    $('#ayam').on({
        'click': function() {
             var src = ($(this).attr('src') === 'img/lihat.png')
                ? 'img/ayam2.png'
                : 'img/lihat.png';
             $(this).attr('src', src);
        }
    });

    //Bebek
    $("input#bebek").click(function () {
        $("audio#bebek").attr({
            'src': "audio/bebek.mp3",
            'autoplay': "autoplay"
        }).appendTo("body");
    }); 

    $('#bebek').on({
        'click': function() {
             var src = ($(this).attr('src') === 'img/lihat.png')
                ? 'img/bebek.png'
                : 'img/lihat.png';
             $(this).attr('src', src);
        }
    });

    //Gagak
    $("input#gagak").click(function () {
        $("audio#gagak").attr({
            'src': "audio/gagak.mp3",
            'autoplay': "autoplay"
        }).appendTo("body");
    }); 

    $('#gagak').on({
        'click': function() {
             var src = ($(this).attr('src') === 'img/lihat.png')
                ? 'img/gagak.png'
                : 'img/lihat.png';
             $(this).attr('src', src);
        }
    });
    
    //Penguin
    $("input#penguin").click(function () {
        $("audio#penguin").attr({
            'src': "audio/penguin.mp3",
            'autoplay': "autoplay"
        }).appendTo("body");
    }); 

    $('#penguin').on({
        'click': function() {
             var src = ($(this).attr('src') === 'img/lihat.png')
                ? 'img/penguin.png'
                : 'img/lihat.png';
             $(this).attr('src', src);
        }
    });

    //Kambing
    $("input#kambing").click(function () {
        $("audio#kambing").attr({
            'src': "audio/kambing.mp3",
            'autoplay': "autoplay"
        }).appendTo("body");
    }); 

    $('#kambing').on({
        'click': function() {
             var src = ($(this).attr('src') === 'img/lihat.png')
                ? 'img/kambing.png'
                : 'img/lihat.png';
             $(this).attr('src', src);
        }
    });

    //Sapi
    $("input#sapi").click(function () {
        $("audio#sapi").attr({
            'src': "audio/sapi.mp3",
            'autoplay': "autoplay"
        }).appendTo("body");
    }); 

    $('#sapi').on({
        'click': function() {
             var src = ($(this).attr('src') === 'img/lihat.png')
                ? 'img/sapi.png'
                : 'img/lihat.png';
             $(this).attr('src', src);
        }
    });

    //Babi
    $("input#babi").click(function () {
        $("audio#babi").attr({
            'src': "audio/babi.mp3",
            'autoplay': "autoplay"
        }).appendTo("body");
    }); 

    $('#babi').on({
        'click': function() {
             var src = ($(this).attr('src') === 'img/lihat.png')
                ? 'img/babi.png'
                : 'img/lihat.png';
             $(this).attr('src', src);
        }
    });

    //Kuda
    $("input#kuda").click(function () {
        $("audio#kuda").attr({
            'src': "audio/kuda.wav",
            'autoplay': "autoplay"
        }).appendTo("body");
    }); 

    $('#kuda').on({
        'click': function() {
             var src = ($(this).attr('src') === 'img/lihat.png')
                ? 'img/kuda.png'
                : 'img/lihat.png';
             $(this).attr('src', src);
        }
    });

    //Singa
    $("input#singa").click(function () {
        $("audio#singa").attr({
            'src': "audio/singa.mp3",
            'autoplay': "autoplay"
        }).appendTo("body");
    }); 

    $('#singa').on({
        'click': function() {
             var src = ($(this).attr('src') === 'img/lihat.png')
                ? 'img/singa.png'
                : 'img/lihat.png';
             $(this).attr('src', src);
        }
    });
    //Paus Biru
    $("input#paus-biru").click(function () {
        $("audio#paus-biru").attr({
            'src': "audio/paus-biru.mp3",
            'autoplay': "autoplay"
        }).appendTo("body");
    }); 

    $('#paus-biru').on({
        'click': function() {
             var src = ($(this).attr('src') === 'img/lihat.png')
                ? 'img/paus-biru.png'
                : 'img/lihat.png';
             $(this).attr('src', src);
        }
    });
    
    //Beruang
    $("input#bear").click(function () {
        $("audio#bear").attr({
            'src': "audio/bear.mp3",
            'autoplay': "autoplay"
        }).appendTo("body");
    }); 

    $('#bear').on({
        'click': function() {
             var src = ($(this).attr('src') === 'img/lihat.png')
                ? 'img/bear.png'
                : 'img/lihat.png';
             $(this).attr('src', src);
        }
    });
    //Komodo
    $("input#komodo").click(function () {
        $("audio#komodo").attr({
            'src': "audio/komodo.mp3",
            'autoplay': "autoplay"
        }).appendTo("body");
    }); 

    $('#komodo').on({
        'click': function() {
             var src = ($(this).attr('src') === 'img/lihat.png')
                ? 'img/komodo.png'
                : 'img/lihat.png';
             $(this).attr('src', src);
        }
    });
});


