<?php
/*
Template Name: Bootstrap Examples
*/

/**
 * @package customtheme
 */

get_header(); ?>

<?php
  $protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://';
  $wpurlprefix = '/wordpress';
  $checkwpurl = substr( $_SERVER['REQUEST_URI'], 0, strlen($wpurlprefix) );
?>

<div id="primary" class="content-area col-md-<?php echo ( is_active_sidebar( 'sidebar-1' ) ? '9' : '12' ); ?> col-sm-12">
  <div class="well">
    <main id="main" class="site-main" role="main">

      <header class="entry-header">
        <h1 class="entry-title">Custom Theme</h1>
      </header>

      <h2>Responsive Video</h2>

      <p>As an &lt;iframe&gt; tag:</p>

      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" height="150" src="<?php echo $protocol; ?>www.youtube.com/embed/zpOULjyy-n8?rel=0" width="300"></iframe>
      </div>

      <p>As a &lt;video&gt; tag:</p>

      <div class="embed-responsive embed-responsive-16by9">
        <!--[if lt IE 9]><script>document.createElement('video');</script><![endif]-->
        <video class="embed-responsive-item" preload="none" controls="controls" poster="<?php echo get_template_directory_uri(); ?>/media/example.png">
          <source type="video/mp4" src="<?php echo get_template_directory_uri(); ?>/media/example.mp4" />
          <a href="<?php echo get_template_directory_uri(); ?>/media/example.mp4"><?php echo get_template_directory_uri(); ?>/media/example.mp4</a>
        </video>
      </div>

      <h2>Responsive Image</h2>

      <a href="<?php echo get_template_directory_uri(); ?>/img/examples/sunset.jpg" class="lightbox">
        <img src="<?php echo get_template_directory_uri(); ?>/img/examples/sunset.jpg" class="img-responsive" alt="splash">
      </a>

      <div class="clearfix"></div>

      <h2>Inline Form</h2>

      <div class="well">
        <form action="#" class="form-inline">
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail2">Email
              address</label> <input class="form-control" id="exampleInputEmail2"
              placeholder="Enter email" type="email">
            </div>

            <div class="form-group">
              <label class="sr-only" for="exampleInputPassword2">Password</label>
              <input class="form-control" id="exampleInputPassword2" placeholder=
              "Password" type="password">
            </div>

            <div class="checkbox">
              <label><input type="checkbox"> Remember me</label>
            </div><button class="btn btn-primary" type="submit">Sign in</button>
          </form>
        </div>

        <div class="clearfix"></div>

        <h2>Form Controls</h2>

        <div class="well">
          <form action="#">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label> <input class=
              "form-control" id="exampleInputEmail1" placeholder="Enter email"
              type="email">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password">
            </div>

            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <input id="exampleInputFile" type="file">
              <p class="help-block">Example block-level help text here.</p>
            </div>

            <div class="form-group">
              <label for="exampleSelect">Select</label>
              <select id="exampleSelect" class="form-control">
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
                <option>Option 4</option>
                <option>Option 5</option>
              </select>
            </div>

            <div class="form-group">
              <label for="exampleInputAmount">Payment Amount</label>
              <div class="input-group">
                <div class="input-group-addon">$</div>
                <input class="form-control" id="exampleInputAmount" placeholder="Amount" type="text">
                <div class="input-group-addon">.00</div>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleTextArea">Additional Comments</label>
              <textarea class="form-control" id="exampleTextArea" rows="5"></textarea>
            </div>

            <div class="checkbox">
              <label><input type="checkbox"> Save my information</label>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
          </form>
        </div>

        <div class="clearfix"></div>

        <h2>Bootstrap Table</h2>

        <table class="table table-striped table-bordered table-hover table-condensed">
          <tbody>
            <tr>
              <th>First</th>
              <th>Last</th>
              <th>Handle</th>
            </tr>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>@jdoe</td>
            </tr>
            <tr>
              <td>Jane</td>
              <td>Smith</td>
              <td>@jsmith</td>
            </tr>
            <tr>
              <td>Steve</td>
              <td>Jones</td>
              <td>@sjones</td>
            </tr>
            <tr>
              <td>David</td>
              <td>K.</td>
              <td>@davidk</td>
            </tr>
          </tbody>
        </table>

        <div class="clearfix"></div>

        <h2>Bootstrap Modal</h2>
        <button class="btn btn-primary btn-lg" data-target="#myModal" data-toggle="modal" type="button">Launch Modal</button>

        <div class="clearfix"></div>

        <h2>Bootstrap Collapse</h2>
        <a class="btn btn-primary btn-lg" data-toggle="collapse" href="#collapseExample">Reveal Content</a>

        <div class="collapse" id="collapseExample">
          <div class="well">
            Efficiently unleash cross-media information without cross-media value.
            Quickly maximize timely deliverables for real-time schemas.
            Dramatically maintain clicks-and-mortar solutions without functional
            solutions.Completely synergize resource sucking relationships via
            premier niche markets. Professionally cultivate one-to-one customer
            service with robust ideas. Dynamically innovate resource-leveling
            customer service for state of the art customer service.
          </div>
        </div>

        <div class="clearfix"></div>

        <h2>Bootstrap Accordion</h2>

        <div class="panel-group" id="accordion">

          <div class="panel panel-default">
            <div class="panel-heading" id="headingOne">
              <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapseOne">Collapsible Group Item #1</a></h4>
            </div>
            <div class="panel-collapse collapse in" id="collapseOne">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life
                accusamus terry richardson ad squid. 3 wolf moon officia aute,
                non cupidatat skateboard dolor brunch. Food truck quinoa
                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                aliqua put a bird on it squid single-origin coffee nulla
                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                beer labore wes anderson cred nesciunt sapiente ea proident. Ad
                vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                farm-to-table, raw denim aesthetic synth nesciunt you probably
                haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading" id="headingTwo">
              <h4 class="panel-title"><a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">Collapsible Group Item #2</a></h4>
            </div>

            <div class="panel-collapse collapse" id="collapseTwo">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life
                accusamus terry richardson ad squid. 3 wolf moon officia aute,
                non cupidatat skateboard dolor brunch. Food truck quinoa
                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                aliqua put a bird on it squid single-origin coffee nulla
                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                beer labore wes anderson cred nesciunt sapiente ea proident. Ad
                vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                farm-to-table, raw denim aesthetic synth nesciunt you probably
                haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading" id="headingThree">
              <h4 class="panel-title"><a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">Collapsible Group Item #3</a></h4>
            </div>

            <div class="panel-collapse collapse" id="collapseThree">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life
                accusamus terry richardson ad squid. 3 wolf moon officia aute,
                non cupidatat skateboard dolor brunch. Food truck quinoa
                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                aliqua put a bird on it squid single-origin coffee nulla
                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                beer labore wes anderson cred nesciunt sapiente ea proident. Ad
                vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                farm-to-table, raw denim aesthetic synth nesciunt you probably
                haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>

        </div>

        <div class="clearfix"></div>

        <h2>Bootstrap Justified Button Groups</h2>

        <div class="btn-group btn-group-justified">
          <div class="btn-group">
            <button class="btn btn-default" type="button">Left</button>
          </div>

          <div class="btn-group">
            <button class="btn btn-default" type="button">Middle</button>
          </div>

          <div class="btn-group">
            <button class="btn btn-default" type="button">Right</button>
          </div>
        </div><!-- Modal -->

        <div class="modal fade" id="myModal" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button class="close" data-dismiss="modal" type=
                "button">×</button>

                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
              </div>

              <div class="modal-body">
                Efficiently unleash cross-media information without cross-media
                value. Quickly maximize timely deliverables for real-time
                schemas. Dramatically maintain clicks-and-mortar solutions
                without functional solutions.Completely synergize resource
                sucking relationships via premier niche markets. Professionally
                cultivate one-to-one customer service with robust ideas.
                Dynamically innovate resource-leveling customer service for
                state of the art customer service.
              </div>

              <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" type=
                "button">Close</button> <button class="btn btn-primary"
                data-dismiss="modal" type="button">Save changes</button>
              </div>
            </div>
          </div>
        </div>

      </main>
    </div>
  </div>

<?php
get_sidebar();
get_footer();