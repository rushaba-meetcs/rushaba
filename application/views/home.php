<style>
  .progress.active .progress-bar {
    -webkit-transition: none !important;
    transition: none !important;
  }

  #tooltip {
    background-color: #333;
    color: white;
    padding: 5px 10px;
    border-radius: 4px;
    font-size: 13px;
  }
  .stretch-card>.card {
     width: 100%;
     min-width: 100%
 }



 .flex {
     -webkit-box-flex: 1;
     -ms-flex: 1 1 auto;
     flex: 1 1 auto
 }

 @media (max-width:991.98px) {
     .padding {
         padding: 1.5rem
     }
 }

 @media (max-width:767.98px) {
     .padding {
         padding: 1rem
     }
 }

 .padding {
     padding: 3rem
 }

 .card {
     box-shadow: none;
     -webkit-box-shadow: none;
     -moz-box-shadow: none;
     -ms-box-shadow: none
 }

 .card {
     position: relative;
     display: flex;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid #3da5f;
     border-radius: 0
 }

 .card .card-body {
     padding: 1.25rem 1.75rem
 }

 .card .card-title {
     color: #000000;
     margin-bottom: 0.625rem;
     text-transform: capitalize;
     font-size: 0.875rem;
     font-weight: 500
 }

 .card .card-description {
     margin-bottom: .875rem;
     font-weight: 400;
     color: #76838f
 }

 .btn.btn-social-icon {
     width: 50px;
     height: 50px;
     padding: 0
 }

 .template-demo>.btn {
     margin-right: 0.5rem !important
 }

 .template-demo {
     margin-top: 0.5rem !important
 }

 .btn.btn-rounded {
     border-radius: 50px
 }

 .btn-outline-facebook {
     border: 1px solid #3b579d;
     color: #3b579d
 }

 .btn-outline-facebook:hover {
     background: #3b579d;
     color: #ffffff
 }

 .btn-outline-youtube {
     border: 1px solid #e52d27;
     color: #e52d27
 }

 .btn-outline-twitter {
     border: 1px solid #2caae1;
     color: #2caae1
 }

 .btn-outline-dribbble {
     border: 1px solid #ea4c89;
     color: #ea4c89
 }

 .btn-outline-linkedin {
     border: 1px solid #0177b5;
     color: #0177b5
 }

 .btn-outline-instagram {
     border: 1px solid #dc4a38;
     color: #dc4a38
 }

 .btn-outline-twitter:hover {
     background: #2caae1;
     color: #ffffff
 }

 .btn-outline-linkedin:hover {
     background: #0177b5;
     color: #ffffff
 }

 .btn-outline-youtube:hover {
     background: #e52d27;
     color: #ffffff
 }

 .btn-outline-instagram:hover {
     background: #e52d27;
     color: #ffffff
 }

 .btn-facebook {
     background: #3b579d;
     color: #ffffff
 }

 .btn-youtube {
     background: #e52d27;
     color: #ffffff
 }

 .btn-twitter {
     background: #2caae1;
     color: #ffffff
 }

 .btn-dribbble {
     background: #ea4c89;
     color: #ffffff
 }

 .btn-linkedin {
     background: #0177b5;
     color: #ffffff
 }

 .btn-instagram {
     background: #dc4a38;
     color: #ffffff
 }

 .btn-facebook:hover,
 .btn-facebook:focus {
     background: #2d4278;
     color: #ffffff
 }

 .btn-youtube:hover,
 .btn-youtube:focus {
     background: #c21d17;
     color: #ffffff
 }

 .btn-twitter:hover,
 .btn-twitter:focus {
     background: #1b8dbf;
     color: #ffffff
 }

 .btn-dribbble:hover,
 .btn-dribbble:focus {
     background: #e51e6b;
     color: #ffffff
 }

 .btn-linkedin:hover,
 .btn-linkedin:focus {
     background: #015682;
     color: #ffffff
 }

 .btn-instagram:hover,
 .btn-instagram:focus {
     background: #bf3322;
     color: #ffffff
 }
</style>

<h1 class="cover-heading">Perspective Api</h1>
<div id="gamePlay">
  <div class="d-flex justify-content-center">
    <form class="form-inline" style="text-align: center;">
      <div class="form-group mx-sm-3 mb-2">
        <label for="inputname" class="sr-only">Name</label>
        <input type="text" class="form-control" id="inputname" required placeholder="Name Please">
      </div>
      
  
    </form>
 
  </div>
  <div style="display: block;"> <p><strong>Note!</strong> Please do check output.There is no data capturing 
 </p><p style="font-size: 30px;">&#128512;</p>
  </div> 
  <div style="display: none;" id="chl">
    <span class="blink" style="display: block;">Arrange Words by drag&drop </span>
    <div class='drophere' id="i1">
      <div id="d3" class="draghere"></div>
    </div>
    <div class='drophere' id="i2">
      <div class="draghere" id="d1">My</div>
    </div>
    <div class='drophere' id="i3">
      <div class="draghere" id="d2">Name is</div>
    </div>
  </div>
</div>
<div id="thxCanvas" style="display: none;"  >

  <canvas height="300"></canvas>
  <h2 style="font-family: 'Finger Paint', cursive;color:tan"> Thank you!!! <br> <span id="cname"></span><br> Please Comment</h2>
  <div class="form">
    <form >
      <div class="pb-cmnt-container ">
        <div class="row">
          <div class="col-md-12 ">
            <div class="panel panel-info">
              <div class="panel-body">
                <textarea name='comment' id='comment' placeholder="Write your comment here!" class="pb-cmnt-textarea"></textarea>

                <button  id="cmtBtn" class="btn btn-primary pull-right" type="button">Comment</button>

              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

<div  id="cmtResult" style="display: none;">

  <div class="col-xs-12 col-sm-12 progress-container">
    <div class="col-xs-12 col-sm-12 progress-containe text-warning">
      TOXICITY

    </div>
    <div id="pertox" class="col-xs-12 col-sm-12 progress-container">

    </div>
    <div class="progress progress-striped active">
      <div id="pbartox" class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width:0%"></div>
    </div>
  </div>

  <div class="col-xs-12 col-sm-12 progress-container">
    <div class="col-xs-12 col-sm-12 progress-container text-info">
      INSULT
    </div>
    <div id="perins" class="col-xs-12 col-sm-12 progress-container">

    </div>
    <div class="progress progress-striped active">
      <div id="pbarins" class="progress-bar progress-bar-striped progress-bar-animated progress-bar-success " style="width:0%"></div>
    </div>
  </div>


  <div class="col-xs-12 col-sm-12 progress-container">
    <div class="col-xs-12 col-sm-12 progress-container text-danger">
    FLIRTATION
    </div>
    <div id="perflt" class="col-xs-12 col-sm-12 progress-container">

    </div>
    <div class="progress progress-striped active">
      <div id="pbarflt" class="progress-bar progress-bar-striped progress-bar-animated progress-bar-success bg-danger" style="width:0%"></div>
    </div>
  </div>

  <div style="display: block;"> <p><strong>Note!</strong> For more Information check Doc in Menu <br>or<br> Connect with me by below social handle.
 </p><p style="font-size: 30px;">&#128512;</p>
 
  </div> 
  <button id="fb" type="button" class="btn btn-social-icon btn-outline-facebook"><i class="fa fa-facebook"></i></button> 
                         <button id="tw" type="button" class="btn btn-social-icon btn-outline-twitter"><i class="fa fa-twitter"> </i></button> 
                          <button id="li" type="button" class="btn btn-social-icon btn-outline-linkedin"><i class="fa fa-linkedin"></i></button> 
                          <button id="in" type="button" class="btn btn-social-icon btn-outline-instagram"><i class="fa fa-instagram"></i></button>
</div>

<script src="https://unpkg.com/zdog@1/dist/zdog.dist.min.js"></script>
<script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
<script>
  // from the Zdog object extract the necessary modules
  const {
    Illustration,
    Ellipse,
    Rect,
    Shape,
    Group,
    Anchor,
  } = Zdog;

  // set up the illustration within the existing canvas element
  const illustration = new Illustration({
    element: 'canvas',
    dragRotate: true,
  });

  // below the star draw a circle with a fill and no stroke, for the shadow
  const shadow = new Ellipse({
    addTo: illustration,
    diameter: 100,
    stroke: false,
    fill: true,
    color: 'hsla(45, 100%, 58%, 0.4)',
    translate: {
      x: 50,
      y: 100
    },
    rotate: {
      x: Math.PI / 1.7
    },
  });

  // include an anchor point for the star
  // ! position the star atop the anchor, to have the rotation occur around this point
  const starAnchor = new Anchor({
    addTo: illustration,
    translate: {
      y: 100
    },
    rotate: {
      z: Math.PI / 10
    },
  });

  // draw a star in a group element positioned atop the anchor point
  const starGroup = new Group({
    addTo: starAnchor,
    translate: {
      x: -70,
      y: -170
    }, // -70 to center the 140 wide shape
  });

  // draw the path describing the star
  new Shape({
    addTo: starGroup,
    path: [{
        x: 0,
        y: 45
      },
      {
        x: 45,
        y: 45
      },
      {
        x: 70,
        y: 0
      },
      {
        x: 95,
        y: 45
      },
      {
        x: 140,
        y: 45
      },
      {
        x: 105,
        y: 80
      },
      {
        x: 120,
        y: 130
      },
      {
        x: 70,
        y: 105
      },
      {
        x: 20,
        y: 130
      },
      {
        x: 35,
        y: 80
      },
      {
        x: 0,
        y: 45
      },
    ],
    stroke: 40,
    color: 'hsl(45, 100%, 58%)',
  });
  // within the path include a rectangle to remove the gap between the center of the star and its stroke
  new Rect({
    addTo: starGroup,
    width: 40,
    height: 50,
    stroke: 40,
    translate: {
      x: 70,
      y: 70
    },
    color: 'hsl(45, 100%, 58%)',
  });

  // include a group for the eyes, positioned halfway through the height of the star
  const eyesGroup = new Group({
    addTo: starGroup,
    translate: {
      x: 70,
      y: 72.5,
      z: 20
    },
  });

  // add black circles describing the contour of the eyes, and either end of the star
  const eye = new Ellipse({
    addTo: eyesGroup,
    diameter: 5,
    stroke: 15,
    translate: {
      x: -32.5
    },
    color: 'hsl(0, 0%, 0%)',
  });
  eye.copy({
    translate: {
      x: 32.5
    },
  });

  // add an anchor point for the white part of the eyes
  // by later translating the white part of the eyes, the rotation allows to have the circle rotate around the anchor point
  const leftEyeAnchor = new Anchor({
    addTo: eyesGroup,
    translate: {
      x: -32.5,
      z: 0.5
    },
  });
  const leftEye = new Ellipse({
    addTo: leftEyeAnchor,
    diameter: 1,
    stroke: 5,
    color: 'hsl(0, 100%, 100%)',
    translate: {
      x: -3.5
    },
  });

  // copy the left anchor for the right side
  const rightEyeAnchor = leftEyeAnchor.copyGraph({
    translate: {
      x: 32.5,
      z: 0.5
    },
  });

  // include an anchor point for the mouth
  // by centering the mouth around the anchor and scaling the anchor itself, the change in size occurs from the center of the mouth
  const mouthAnchor = new Anchor({
    addTo: starGroup,
    translate: {
      x: 70,
      y: 95,
      z: 20
    },
    scale: 0.8,
  });
  // draw a mouth with a line and arc commands
  const mouth = new Shape({
    addTo: mouthAnchor,
    path: [{
        x: -8,
        y: 0
      },
      {
        x: 8,
        y: 0
      },
      {
        arc: [{
            x: 4,
            y: 6
          },
          {
            x: 0,
            y: 6
          },
        ],
      },
      {
        arc: [{
            x: -4,
            y: 6
          },
          {
            x: -8,
            y: 0
          },
        ],
      },
    ],
    stroke: 10,
    color: 'hsl(358, 100%, 65%)',
  });

  illustration.updateRenderGraph();

  /* to animate the star, change the transform property as follows

  |variableName|transform|valueRange|
  |---|---|---|
  |starAnchor|rotate.z|[Math.PI/10, -Math.PI/10]|
  |leftIrisAnchor && rightIrisAnchor|rotate.z|[0, Math.PI/2]|
  |mouthAnchor|scale|[0.8, 1.2]|
  |shadow|translate.x|[50, -50]|
  */

  // ! I am positive there are much better ways to achieve this animation, but this is my take using anime.js
  // I am still a newbie when it comes to animation
  // create an object describing the values for the different elements
  const starObject = {
    star: Math.PI / 10,
    shadow: 50,
    mouth: 0.8,
    eyes: 0
  }

  // set up a repeating animation which constantly updates the illustration and updates the desired transform properties according to the object's values
  const timeline = anime.timeline({
    duration: 1100,
    easing: 'easeInOutQuart',
    direction: 'alternate',
    loop: true,
    update: () => {
      starAnchor.rotate.z = starObject.star;
      shadow.translate.x = starObject.shadow;
      mouth.scale = starObject.mouth;
      leftEyeAnchor.rotate.z = starObject.eyes;
      rightEyeAnchor.rotate.z = starObject.eyes;

      illustration.updateRenderGraph();
    }
  });

  // animate the star with a slightly more pronounced easing function
  timeline.add({
    targets: starObject,
    star: -Math.PI / 10,
    easing: 'easeInOutQuint',
  });
  // have the shadow follow with a small delay
  timeline.add({
    targets: starObject,
    delay: 20,
    shadow: -50,
  }, '-=1100')

  // with a smaller duration and slightly postponed, animate the mouth and the eyes
  timeline.add({
    targets: starObject,
    mouth: 1.2,
    duration: 300,
  }, '-=800');

  timeline.add({
    targets: starObject,
    eyes: Math.PI / 2,
    duration: 900,
  }, '-=1000');
</script>
<script>
  function blink_text() {
    $('.blink').fadeOut(500);
    $('.blink').fadeIn(500);
  }
  setInterval(blink_text, 1000);





  $(document).ready(function() {

    $("#pbartox").animate({
        width: "0%"
      }, 2);
    function checkResult() {
      i1 = "";
      i2 = "";
      i3 = "";

      $('#i1').children('div').each(function() {
        i1 = $(this).attr('id');

      })
      $('#i2').children('div').each(function() {
        i2 = $(this).attr('id');

      })
      $('#i3').children('div').each(function() {
        i3 = $(this).attr('id');

      })
      console.log(i1, i2, i3)
      if (i1 == "d1" && i2 == "d2" && i3 == "d3") {
        $("#cname").text($("#d3").text());
        $('#gamePlay').css('display', 'none');
        $('#thxCanvas').css('display', 'block');
      }

    }





    window.startPos = window.endPos = {};

    makeDraggable();

    $('.drophere').droppable({
      hoverClass: 'hoverClass',
      drop: function(event, ui) {
        var $from = $(ui.draggable),
          $fromParent = $from.parent(),
          $to = $(this).children(),
          $toParent = $(this);

        window.endPos = $to.offset();

        swap($from, $from.offset(), window.endPos, 0);
        swap($to, window.endPos, window.startPos, 1000, function() {
          $toParent.html($from.css({
            position: 'relative',
            left: '',
            top: '',
            'z-index': ''
          }));
          $fromParent.html($to.css({
            position: 'relative',
            left: '',
            top: '',
            'z-index': ''
          }));
          makeDraggable();
          setTimeout(checkResult, 1000);
        });

      }
    });

    function makeDraggable() {
      $('.draghere').draggable({
        zIndex: 99999,
        revert: 'invalid',
        start: function(event, ui) {
          window.startPos = $(this).offset();
        }
      });
    }

    function swap($el, fromPos, toPos, duration, callback) {
      $el.css('position', 'absolute')
        .css(fromPos)
        .animate(toPos, duration, function() {


          if (callback) callback(function() {



          });
        });


    }
  });

  $("input").keyup(function(e) {






    val = $("#inputname").val();
    if (val.length > 0) {

      $('#chl').css('display', 'block');

    } else {

      $('#chl').css('display', 'none');
    }
    $("#d3").text(val);
  });

  $("#fb").click(function()
  {

    window.location.href="https://www.facebook.com/nparushab/";
  })
  $("#tw").click(function()
  {

    window.location.href="https://twitter.com/RushabAmbre";
  })
  $("#in").click(function()
  {

    window.location.href="https://www.instagram.com/rushab_ambre/";
  })
  $("#li").click(function()
  {

    window.location.href="https://www.linkedin.com/in/rushab-ambre-5bb634149/";
  })
  $("#cmtBtn").click(function()
  {
    var text = $('textarea#comment').val();
    $.ajax({
    type: 'POST',
    url: 'home/comment',
    data: {
      "comment": text
    },
    dataType: 'json',
    success: function(data) {
      dins =parseInt( parseFloat(data['attributeScores']['INSULT']['summaryScore']['value']).toFixed( 2 ) * 100);
      dtox = parseInt(parseFloat(data['attributeScores']['TOXICITY']['summaryScore']['value']).toFixed( 2 ) * 100);
      dflt = parseInt(parseFloat(data['attributeScores']['FLIRTATION']['summaryScore']['value']).toFixed( 2 ) * 100);
      $("#pbarins").animate({
        width: dins + "%"
      }, 2500);
      $("#pbartox").animate({
        width: dtox + "%"
      }, 2500);
      $("#perins").text(dins + "%");
      $("#pertox").text(dtox + "%");

      $("#pbarflt").animate({
        width: dflt + "%"
      }, 2500);
      $("#perflt").text(dflt + "%");

      $('#thxCanvas').css('display', 'none');
      $('#cmtResult').css('display', 'block');
    }
  });
  });

  
</script>
<script>

</script>