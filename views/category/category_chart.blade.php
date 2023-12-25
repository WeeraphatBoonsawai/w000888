<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category Chart</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
     
    <center>
        <img src="https://www.lpl.com/content/dam/lpl-www/images/newsroom/read/insider/insider-blog-meme-stocks-what-do-they-mean_article-hero-450x450.png" alt="">
        
    <h1>How to Use Charts.JS in Laravel 9 - LaravelTuts.com</h1>
    <div style="width: 50%; height:50%">
    <canvas id="myChart" height="200px"></canvas>  </div> </center> 
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
<script type="text/javascript">
  
    var labels =  {{ Js::from($labels) }};
    var datas =  {{ Js::from($data) }};
  
    const data = {
        labels: labels,
        datasets: [{
            label: 'Product Type',
            backgroundColor: 'rgb(112,128,144)',
            borderColor: 'rgb(176,196,222)',
            data: datas,
        }]
    };
  
    const config = {
        type: 'bar',
        data: data,
        options: {}
    };
  
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
  
</script>

<br>
<center>
    <div class="inline-flex ">
        <a href="{{ url('/product_type') }}">
        <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
            Product Type
        </button>
    </a>
    <a href="{{ url('/brand') }}">
        <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
            Brand
        </button>
    </a>
    <a href="{{ url('/product') }}">
        <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
            Product
          </button>
        </a>
        <a href="{{ url('/promotion') }}">
            <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                Promotion
              </button>
            </a>
            <a href="{{ url('/customer') }}">
                <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                    Customer
                  </button>
                </a>

                <a href="{{ url('/category-chart') }}">
                    <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                        Category Chart
                      </button>
                    </a>
      </div>
    </center>
    <br>
</html>
