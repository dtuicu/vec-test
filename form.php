<?php
include "_head.inc";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title></title>

		<script>
			function closeIt()
			{
				return "Any string value here forces a dialog box to \n" +
						"appear before closing the window.";
			}
			window.onbeforeunload = closeIt;
		</script>

    <script>
      window.noInitialMbox = false;

      // window.targetGlobalSettings = {  
      //   viewsEnabled:true,
      //   decisioningMethod: 'hybrid',
      //   // serverState : {
      //   //   request : {"requestId":"e0772245161e40fd8844772c9e037988","context":{"userAgent":"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.80 Safari/537.36","timeOffsetInMinutes":60,"channel":"web","screen":{"width":1130,"height":927,"orientation":"landscape","colorDepth":24,"pixelRatio":1},"window":{"width":1130,"height":927},"browser":{"host":"kuehl.local","webGLRenderer":"AMD Radeon Pro 560X OpenGL Engine"},"address":{"url":"https://kuehl.local/customer/lloyds/consent-crm-data-example/?at_preview_token=mhFIzJSF7JWb-RsnakpBqgqxCoyxyDCUh2Btk9zFvp0&at_preview_index=1_2&at_preview_listed_activities_only=true&mboxDebug=true","referringUrl":""}},"id":{"tntId":"e1264dfa75804cfda0fdf3f9a710f47f.37_0","marketingCloudVisitorId":"36271531230374153860991705322090477089"},"property":{"token":"85fdbac4-912b-e7c3-6a1b-741d0e3cb5a6"},"trace":{"authorizationToken":"7b4382fd-8723-4993-9dd6-711cc6b54555"},"experienceCloud":{"audienceManager":{"locationHint":6,"blob":"RKhpRz8krg2tLO6pguXWp5olkAcUniQYPHaMWWgdJ3xzPWQmdj0y"},"analytics":{"logging":"server_side","supplementalDataId":"2968DD5DE2E610F1-3A2DD0404C962CD8"}},"qaMode":{"token":"mhFIzJSF7JWb-RsnakpBqgqxCoyxyDCUh2Btk9zFvp0","listedActivitiesOnly":true,"previewIndexes":[{"activityIndex":1,"experienceIndex":2}]},"execute":{"pageLoad":{"parameters":{"entityId":""}}},"prefetch":{"views":[{"parameters":{"entityId":""}}]}},
      //   //   response : {"status":200,"requestId":"876470b4fa4d440f896b07a4682ad037","client":"adobeinternalags1182","id":{"tntId":"e1264dfa75804cfda0fdf3f9a710f47f.37_0","marketingCloudVisitorId":"36271531230374153860991705322090477089"},"edgeHost":"mboxedge37.tt.omtrdc.net","telemetryServerToken":"wCo/+PJpxeEeLo4mV5p9X4ej8AP030NUM0Fd++szEJs=","execute":{"mboxes":[{"index":0,"name":"loc-1-tile-crm","trace":{"error":"Authorization token required"}},{"index":1,"name":"loc-2-banner-crm","trace":{"error":"Authorization token required"}},{"index":2,"name":"loc-3-accountlink-crm","trace":{"error":"Authorization token required"}}]}}
      //   // }
      // };

    </script>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">
    <style>.at-element-marker{ word-break: break-word; font-size:12px; }</style>

    <script src="//assets.adobedtm.com/080e292c3e86/f60f80af3119/launch-1d3547701808-development.min.js"></script>
    <!-- script src="//assets.adobedtm.com/080e292c3e86/f60f80af3119/launch-e5967fa7132a-staging.min.js" async></!-->
    <!-- script src="//assets.adobedtm.com/080e292c3e86/f60f80af3119/launch-e6c47992281a.min.js" async></!-->

    <script>
      var waitForElement = function (selector, callback) {
        var interv = setInterval(function () {
          if (typeof $ !== 'undefined' && $(selector).length > 0) {
            var $ele = $(selector);
            clearInterval(interv);
            callback($ele);
          }
        }, 60);
      };
      var waitForLib = function (lib, callback) {
        var intervLib = setInterval(function () {
          if (typeof window[lib] !== 'undefined') {
            clearInterval(intervLib);
            callback();
          }
        }, 60);
      };
    </script>

  </head>

  <body>
		<?php
		include "_navi.inc";
		?>
    <main role="main" class="container">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <h4 id="localh2"><?php echo $_COOKIE["PHPSESSID"]; ?></h4>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-12">

					</div>
        </div>
        <hr>
        <div class="row">
          <div class="col-12">
            <div id="container2" loc-id="loc-2-banner"><?php echo $message; ?></div>
          </div>
        </div>
          <!-- <div class="col-4">
            <div id="container3" loc-id="loc-3-accountlink">loc-3-accountlink-crm</div>
          </div> -->
       
     
      </div>
    </main><!-- /.container -->

      <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
