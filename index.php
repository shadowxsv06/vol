

<!-- saved from url=(0034)http://websiteproject.ca/test.html -->
<html><head class="has-navbar-fixed-top"><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <!-- Some SEO -->
    <meta name="title" value="CryptoZyzz Volume Monitor">
    <meta name="author" value="CryptoZyzz">
    <meta name="description" value="A volume monitor against the buys/sells to indicate market pressure.">
    <link rel="shortcut icon" type="image/x-icon" href="http://websiteproject.ca/favicon-area-chart.ico">
    <!-- Title -->
    <title>Volume Monitor</title>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-9681547784552447",
        enable_page_level_ads: true
      });
    </script>
    <!-- Bulma.IO -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom Styles (inline) -->
    <style>
        .navbar-nav {
          display: flex;
          flex-grow: 1;
          flex-direction: row;
          justify-content: space-between;
          color: white;
        }
        .navbar-item p {
          color: white;
        }
        .hero {
          padding-top: 6rem;
        }
        @media(max-width: 740px) {
          .navbar-item.center {
            display: none;
          }
        }
        @media(max-width: 1286px) {
          .flex-container {
            flex-direction: column !important;
          }
        }
        .flex-container {
          display: flex;
          min-height: 100%;
          flex-direction: row;
          flex-grow: 1;
        }
        .flex-container section {
          flex-grow: 1;
          justify-content: flex-start;
          padding-bottom: 3.5rem;
        }
        .table {
          white-space:nowrap;
        }
        .table tr th:last-child {
          min-width: 50px !important;
        }
        .table th {
          text-align: center;
        }
        .table th a{
          display:block;
        }
        .table thead th {
          font-size: 13px;
        }
        .table tr.coin{
          font-weight: 500;
          font-size: 15px;
          font-family: "Courier New";
        }
        tr th:last-child {
          min-width: 40px;
        }
        tr.is-warning th:first-child {
          background: hsl(44, 100%, 50%);
        }
        tr.is-danger th:first-child {
          background: hsl(348, 100%, 61%);
          color: white;
        }
        @media(max-width: 1286px) {
          .card {
            overflow-x: scroll;
          }
        }
        .card {
          min-height: 100px;
        }
        .title {
          font-size: 3rem;
        }
        #copied {
          font-size: 13px;
          font-weight: 400;
        }
        #eth {
          margin-top: 1rem;
        }
        #eth-addr {
          cursor: pointer;
          background: white;
          padding: .5rem;
          border-radius: 6px;
          font-weight: 500;
        }
        #eth-addr:hover {
          box-shadow: inset 0 1px 2px rgba(10, 10, 10, 0.1);
        }
        #eth-addr:active {
          box-shadow: inset 0 1px 2px rgba(10, 10, 10, 0.2);
        }
        .fg-toolbar {
          display: none;
        }
    </style>
    <!-- SCRIPTS -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script type="text/javascript" async src="https://www.googletagmanager.com/gtag/js?id=UA-107037311-1"></script>
    <meta name="coinzilla" content="6a793f277d2272787128f98f2ebe4632" />
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-107037311-1');
    </script>
  </head>
  <body>
    <nav class="navbar has-shadow is-dark is-fixed-top">
      <div class="navbar-nav">
        <div class="navbar-item first">
          <p class="content" style="font-size: 1.5rem;"  href="https://twitter.com/CryptoZyzz">Created By: <a href="https://twitter.com/CryptoZyzz">CryptoZyzz</a>
          <a class="button is-info" style="border-radius: 50%;" data-social-network="Twitter" data-social-action="tweet" target="_blank" href="https://twitter.com/CryptoZyzz">
            <span class="icon">
              <i class="fa fa-twitter"></i>
            </span>
          </a>
        </p></div>
        <div class="navbar-item center">
            <p class="content" style="font-size: 1.5rem;">Binance Volume Monitor
        </p></div>
        <div class="navbar-item last">
            <div class="field">
              <p class="control">
                <a class="button is-info" data-social-network="Twitter" data-social-action="tweet" target="_blank" href="https://twitter.com/intent/tweet">
                  <span class="icon">
                    <i class="fa fa-twitter"></i>
                  </span>
                  <span>
                    Tweet
                  </span>
                </a>
              </p>
            </div>
        </div>
      </div>
    </nav>
    <div class="flex-container">
      <section class="section hero is-light">
        <div class="container-fluid">
            <h2 class="title is-2">How to use:</h2>
            <p class="content" style="padding-bottom: 4rem;">
                This page does a check every 1 minute and resets hourly.
                <br>
                Results appear automatically.
                <br>
                <br><b>Pings</b> is the number of POSITIVE pings (a ping is net vol increase of greater than 0.3% or 10btc) <br>
                <b>Net Vol BTC</b> is the net volume since last reset, the sum of recent total vol btc (hourly; Ex: 50btc of buys and 20 btc of sells is 30btc of net vol) <br>
                <b>Net Vol %</b> is the net volume increase since the last reset, aka the sum of recent vol % over the past hour <br>
                <b>Recent Total Vol BTC</b> is the total volume in btc during the last ping interval (every 1 min) <br>
                <b>Recent Vol %</b> is the volume increase in % in the last ping interval, compared vs the total 24h volume (every 1 min; total volume, not net) <br>
                <b>Recent Net Vol</b>is the net volume increase in btc in the last ping interval (every 1 min; Ex: 50btc of buys and 20 btc of sells is 30btc of net vol)  <br>
                <br>A <span style="background: hsl(48, 100%, 67%);">Yellow</span> name is a warning: at 3 pings
                <br><span style="background: hsl(348, 100%, 61%); color: white;">Red</span> name is an alert: every 5 pings or more
                <br>Here is a short video from me with some explanation: <a href="https://youtu.be/RzTeGTdhZf8">https://youtu.be/RzTeGTdhZf8</a>
                <br>Here is a one hour video from someone using it, more in depth: <a href="https://youtube.com/watch?v=7EUHVpbIOi0">https://youtube.com/watch?v=7EUHVpbIOi0</a>
                <br>This tool is best to use on days when the alt market is bullish, in combination with your own charting knowledge
                </p><hr>
                <h4 class="subtitle is-4">A tip: </h4>Watch coins for warnings, and then see if the volume is increasing. Net vol of 5% can be the start of a pump, up to 20~30%&lt;
                <br>Net volume is all the buys against the sells, indicating which way the market pressure is (+ is buys, - is sells)
                <hr>
                <h4 class="subtitle is-4">A note: </h4>
					This tool is best used in some kind of alt season/volatility. I have made many gains from it, and if you put a lot of time into using it and learning it you can generate your own profit.
                <br>Follow me on twitter for trading calls and advice! @cryptozyzz
                <br>Message me on twitter if you have some advice for UI improvements or other features
            <p>
            </p><p>
                <br>If you made some serious profits from this, feel free to donate to me!
                <br></p><div id="eth"><div id="eth-addr-txt">Eth address: </div><div data-clipboard-text="0x2873bd5FCDaf6B008Ac0B8627ffF2bE842497880" id="eth-addr">0x2873bd5FCDaf6B008Ac0B8627ffF2bE842497880</div><div id="copied"> Click to Copy!</div></div>
            <p></p>
        </div>
      </section>
      <section class="section hero is-bold has-text-centered">
        <div class="columns is-centered">
          <div class="card">
            <div class="card-content">
              <div id="pinger_wrapper" class="dataTables_wrapper dt-jqueryui no-footer"><div class="fg-toolbar ui-toolbar ui-widget-header ui-helper-clearfix ui-corner-tl ui-corner-tr"><div class="dataTables_length" id="pinger_length"></div></div><table id="pinger" class="table is-bordered is-narrow is-hoverable dataTable no-footer" role="grid" aria-describedby="pinger_info">
                  <colgroup>
                    <col style="width:6%;">
                    <col style="width:4%;">
                    <col style="width:8%;">
                    <col style="width:10%;">
                    <col style="width:20%;">
                    <col style="width:10%;">
                    <col style="width:15%;">
                    <col style="width:25%;">
                  </colgroup>
                <thead>
                  <tr role="row"><th class="sorting ui-state-default sorting_asc" tabindex="0" aria-controls="pinger" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Coin: activate to sort column descending" style="width: 36.5px;"><div class="DataTables_sort_wrapper">Coin<span class="DataTables_sort_icon css_right ui-icon ui-icon-triangle-1-n"></span></div></th><th class="sorting ui-state-default" tabindex="0" aria-controls="pinger" rowspan="1" colspan="1" aria-label="Pings: activate to sort column ascending" style="width: 33.5px;"><div class="DataTables_sort_wrapper">Pings<span class="DataTables_sort_icon css_right ui-icon ui-icon-caret-2-n-s"></span></div></th><th class="sorting ui-state-default" tabindex="0" aria-controls="pinger" rowspan="1" colspan="1" aria-label="Net Vol BTC: activate to sort column ascending" style="width: 80.5px;"><div class="DataTables_sort_wrapper">Net Vol BTC<span class="DataTables_sort_icon css_right ui-icon ui-icon-caret-2-n-s"></span></div></th><th class="sorting ui-state-default" tabindex="0" aria-controls="pinger" rowspan="1" colspan="1" aria-label="Net Vol %: activate to sort column ascending" style="width: 80.5px;"><div class="DataTables_sort_wrapper">Net Vol %<span class="DataTables_sort_icon css_right ui-icon ui-icon-caret-2-n-s"></span></div></th><th class="sorting ui-state-default" tabindex="0" aria-controls="pinger" rowspan="1" colspan="1" aria-label="Recent Total Vol BTC: activate to sort column ascending" style="width: 186.5px;"><div class="DataTables_sort_wrapper">Recent Total Vol BTC<span class="DataTables_sort_icon css_right ui-icon ui-icon-caret-2-n-s"></span></div></th><th class="sorting ui-state-default" tabindex="0" aria-controls="pinger" rowspan="1" colspan="1" aria-label="Recent Vol %: activate to sort column ascending" style="width: 81.5px;"><div class="DataTables_sort_wrapper">Recent Vol %<span class="DataTables_sort_icon css_right ui-icon ui-icon-caret-2-n-s"></span></div></th><th class="sorting ui-state-default" tabindex="0" aria-controls="pinger" rowspan="1" colspan="1" aria-label="Recent Net Vol: activate to sort column ascending" style="width: 133.5px;"><div class="DataTables_sort_wrapper">Recent Net Vol<span class="DataTables_sort_icon css_right ui-icon ui-icon-caret-2-n-s"></span></div></th><th class="sorting ui-state-default" tabindex="0" aria-controls="pinger" rowspan="1" colspan="1" aria-label="Datetime: activate to sort column ascending" style="width: 237.5px;"><div class="DataTables_sort_wrapper">Datetime(UTC)<span class="DataTables_sort_icon css_right ui-icon ui-icon-caret-2-n-s"></span></div></th></tr>
                </thead>
                <tbody>
                  </tr></tbody>
            </div>
          </div>
        </div>
      </section>
    </div>
  
  <footer>
    <!-- Clipboard.js -->
    <script src="https://cdn.jsdelivr.net/npm/clipboard@1/dist/clipboard.min.js"></script>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
      jQuery(document).ready(function($) {
        
        var audio = new Audio("/static/beep.wav");
        var clipboard = new Clipboard('#eth-addr');
        $('table')

        $('#eth-addr').click(function() {
            $('#copied').text(' Copied!');
            setTimeout(function() {
                $('#copied').text(' Click to Copy!');
            }, 1000);
        });

        $('#main_nav a').click(function(event) {
            // Remember the link href
            var href = this.href;
            var coiny = href.replace('https://www.binance.com/en/trade/', '').replace('_BTC', '')

            // Don't follow the link
            event.preventDefault();

           //  $.ajax({
      	  		// url: '/ok2',
          	// 	type: 'POST', coin: coiny})
            window.location = href;
        });

      	rows = 1
      	push = -1
      	function test(){
      		$.ajax({
      	  		url: '/ok',
          		type: 'POST',
      	  		success: function(ret) {
      	  			if (ret.resu == null || ret.resu.length == 0){
      	  				return
      	  			}

      	  			if (ret.resu.slice(-1)[0] == push) {
      	  				return
      	  			}
      	  			push = ret.resu.slice(-1)[0]
      	  			for (var i = 0; i < ret.resu.length-1; i++) {
      	  				data = ret.resu[i].split('|')

      	  				tr = '<tr class="coin">'

      	  				url = 0
      	  				for (j in data){
		                    if (url == 0) {
		                      tr += '<th> <a href="https://www.binance.com/en/trade/' + data[j] + '_BTC" target="_blank">' + data[j] + '</a></th>'
		                      url = 1
		                    } else {
		                      tr += '<th>' + data[j] + '</th>'
		                    }
      	  				}
      	  				tr += '</tr>'
		                if (tr == '<tr class="coin"></tr>'){
		                    continue
		                }
      	  				if (data[1] == '3') {
      	  					tr = '<tr class="coin is-warning" style="color: white"><th>' + tr.substr(21);
                    if (parseFloat(data[6]) > 0){
                      audio.play();
                    }
      	  				} else if ((data[1] != 0) && (data[1] % 5 == 0)) {
      	  					tr = '<tr class="coin is-danger" style="color: white"><th>' + tr.substr(21);
      	  				}
      	  				$('#pinger tbody').after(tr);
      	  				rows += 1
      	  				if (rows > 16){
      	  					$("table#pinger tr:nth-child(17)").remove();
      	  				}

      	  			}
      	  		}
      		});
      	}
      	test();
      	setInterval(test, 60 * 1000);
      });
    </script>
  </footer>

</body></html>
