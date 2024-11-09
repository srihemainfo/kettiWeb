<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Success</title>
    
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
            background: linear-gradient(90deg, rgb(121 233 184) 0%, rgba(229, 255, 244, 1) 100%);
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
            color: #119c6c;
            font-weight: 600;
        }
        
        .table th, .table td {
            background: #f5f5f5;
        }
        
        .table td {
            text-align: end;
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
                    <img src="images/payment-success.webp" alt="payement success">
                    <p>Payment Successful</p>
                </div>
                
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <th scope="row">Payment Type</th>
                            <td>Net Banking</td>
                        </tr>
                        <tr>
                            <th scope="row">Bank</th>
                            <td>HDFC</td>
                        </tr>
                        <tr>
                            <th scope="row">Mobile</th>
                            <td>6379163256</td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td>example@gamil.com</td>
                        </tr>
                        <tr>
                            <th scope="row">Amount Paid</th>
                            <td>500</td>
                        </tr>
                        <tr>
                            <th scope="row">Transaction ID</th>
                            <td> <i class="fal fa-copy" style="cursor:pointer;"></i> <span>11223344556677</span> </td>
                        </tr>
                    </tbody>
                </table>
                
                <div class="payment-success-btn d-flex justify-content-evenly">
                    
                    <button class="print-btn">
                      <span class="printer-wrapper">
                        <span class="printer-container">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 92 75">
                            <path
                              stroke-width="5"
                              stroke="black"
                              d="M12 37.5H80C85.2467 37.5 89.5 41.7533 89.5 47V69C89.5 70.933 87.933 72.5 86 72.5H6C4.067 72.5 2.5 70.933 2.5 69V47C2.5 41.7533 6.75329 37.5 12 37.5Z"
                            ></path>
                            <mask fill="white" id="path-2-inside-1_30_7">
                              <path
                                d="M12 12C12 5.37258 17.3726 0 24 0H57C70.2548 0 81 10.7452 81 24V29H12V12Z"
                              ></path>
                            </mask>
                            <path
                              mask="url(#path-2-inside-1_30_7)"
                              fill="black"
                              d="M7 12C7 2.61116 14.6112 -5 24 -5H57C73.0163 -5 86 7.98374 86 24H76C76 13.5066 67.4934 5 57 5H24C20.134 5 17 8.13401 17 12H7ZM81 29H12H81ZM7 29V12C7 2.61116 14.6112 -5 24 -5V5C20.134 5 17 8.13401 17 12V29H7ZM57 -5C73.0163 -5 86 7.98374 86 24V29H76V24C76 13.5066 67.4934 5 57 5V-5Z"
                            ></path>
                            <circle fill="black" r="3" cy="49" cx="78"></circle>
                          </svg>
                        </span>
                    
                        <span class="printer-page-wrapper">
                          <span class="printer-page"></span>
                        </span>
                      </span>
                      Print
                    </button>
                    
                    <a class="print-btn" href="#">
                      Close
                    </a>

                </div>
                
            </div>
        </div>
    </div>
    
</section>   


 <script>
    function copyToClipboard(event) {
        // Find the <span> element within the same <td>
        const span = event.target.nextElementSibling;
        if (span) {
            // Create a temporary input element to hold the span content
            const tempInput = document.createElement('input');
            tempInput.value = span.textContent;
            document.body.appendChild(tempInput);
            tempInput.select();
            // Copy the content to the clipboard
            document.execCommand('copy');
            // Remove the temporary input element from the document
            document.body.removeChild(tempInput);
            // Optionally, provide user feedback
            alert('Copied: ' + span.textContent);
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        // Attach the click event listener to the <i> element
        const icon = document.querySelector('.fal.fa-copy');
        if (icon) {
            icon.addEventListener('click', copyToClipboard);
        }
    });
    
    
    // Print the page 
    
    document.addEventListener('DOMContentLoaded', () => {
        const printButton = document.querySelector('.print-btn');
        if (printButton) {
            printButton.addEventListener('click', () => {
                window.print();
            });
        }
    });

    
</script>