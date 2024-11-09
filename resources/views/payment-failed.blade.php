<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Failed</title>
    
    <!----- Bootstrap ----->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    
    <!----- Font Awesome ----->
    
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    
    <style>
        
        body {
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(90deg, rgb(233 121 121) 0%, rgb(255 229 229) 100%);
        }
        
        .payment-success-title img {
            width: 10%;
        }
        
        .payment-success-title p {
            font-size: normal;
            margin-bottom: 10px;
        }
        
        .payment-success-title p {
            font-size: xx-large;
            color: #E72929;
            font-weight: 600;
        }
        
        .table th, .table td {
            background: #f5f5f5;
        }
        
        .table td {
            text-align: center;
        }
        
        .payment-success {
            background: #f5f5f5;
            padding: 35px;
            border-radius: 25px;
            min-width: 430px;
            -webkit-box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.75);
            box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.75);
        }
        
        .print-btn {
          width: 100px;
          height: 45px;
          display: flex;
          align-items: center;
          justify-content: center;
          background-color: white;
          border: 1px solid rgb(213, 213, 213);
          border-radius: 10px;
          gap: 10px;
          font-size: 16px;
          cursor: pointer;
          overflow: hidden;
          font-weight: 500;
          box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.065);
          transition: all 0.3s;
          text-decoration: none;
            color: black;
        }
        .printer-wrapper {
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          width: 20px;
          height: 100%;
        }
        .printer-container {
          height: 50%;
          width: 100%;
          display: flex;
          align-items: flex-end;
          justify-content: center;
        }
        
        .printer-container svg {
          width: 100%;
          height: auto;
          transform: translateY(4px);
        }
        .printer-page-wrapper {
          width: 100%;
          height: 50%;
          display: flex;
          align-items: flex-start;
          justify-content: center;
        }
        .printer-page {
          width: 70%;
          height: 10px;
          border: 1px solid black;
          background-color: white;
          transform: translateY(0px);
          transition: all 0.3s;
          transform-origin: top;
        }
        .print-btn:hover .printer-page {
          height: 16px;
          background-color: rgb(239, 239, 239);
        }
        .print-btn:hover {
          background-color: rgb(239, 239, 239);
        }
        
        @media (max-width: 767px) {
            .payment-success {
                min-width: min-content !important;
                padding: 25px;
            }
        }

    </style>
    
</head>


<section class="payment-success-section">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="payment-success col-8 text-center">
            
                <div class="payment-success-title">
                    <img src="images/payment-failed.webp" alt="payement success">
                    <p>Payment Failed</p>
                </div>
                
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td>Hi there, unfortunately we were unable to charge your <b>Payment.</b> Please try again !</td>
                        </tr>
                    </tbody>
                </table>
                
                <div class="payment-success-btn d-flex justify-content-evenly">
                    
                    <a class="print-btn" href="#">
                      Try Again
                    </a>

                </div>
                
            </div>
        </div>
    </div>
    
</section>   