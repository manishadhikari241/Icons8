<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        #invoice {
            padding: 30px;
        }

        .invoice {
            position: relative;
            background-color: #FFF;
            min-height: 680px;
            padding: 15px
        }

        .invoice header {
            padding: 10px 0;
            margin-bottom: 20px;
            border-bottom: 1px solid #3989c6
        }

        .invoice .company-details {
            text-align: right
        }

        .invoice .company-details .name {
            margin-top: 0;
            margin-bottom: 0
        }

        .invoice .contacts {
            margin-bottom: 20px
        }

        .invoice .invoice-to {
            text-align: left
        }

        .invoice .invoice-to .to {
            margin-top: 0;
            margin-bottom: 0
        }

        .invoice .invoice-details {
            text-align: right
        }

        .invoice .invoice-details .invoice-id {
            margin-top: 0;
            color: #3989c6
        }

        .invoice main {
            padding-bottom: 50px
        }

        .invoice main .thanks {
            margin-top: -100px;
            font-size: 2em;
            margin-bottom: 50px
        }

        .invoice main .notices {
            padding-left: 6px;
            border-left: 6px solid #3989c6
        }

        .invoice main .notices .notice {
            font-size: 1.2em
        }

        .invoice table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px
        }

        .invoice table td, .invoice table th {
            padding: 15px;
            background: #eee;
            border-bottom: 1px solid #fff
        }

        .invoice table th {
            white-space: nowrap;
            font-weight: 400;
            font-size: 16px
        }

        .invoice table td h3 {
            margin: 0;
            font-weight: 400;
            color: #3989c6;
            font-size: 1.2em
        }

        .invoice table .qty, .invoice table .total, .invoice table .unit {
            text-align: right;
            font-size: 1.2em
        }

        .invoice table .no {
            color: #fff;
            font-size: 1.6em;
            background: #3989c6
        }

        .invoice table .unit {
            background: #ddd
        }

        .invoice table .total {
            background: #3989c6;
            color: #fff
        }

        .invoice table tbody tr:last-child td {
            border: none
        }

        .invoice table tfoot td {
            background: 0 0;
            border-bottom: none;
            white-space: nowrap;
            text-align: right;
            padding: 10px 20px;
            font-size: 1.2em;
            border-top: 1px solid #aaa
        }

        .invoice table tfoot tr:first-child td {
            border-top: none
        }

        .invoice table tfoot tr:last-child td {
            color: #3989c6;
            font-size: 1.4em;
            border-top: 1px solid #3989c6
        }

        .invoice table tfoot tr td:first-child {
            border: none
        }

        .invoice footer {
            width: 100%;
            text-align: center;
            color: #777;
            border-top: 1px solid #aaa;
            padding: 8px 0
        }

        @media print {
            .invoice {
                font-size: 11px !important;
                overflow: hidden !important
            }

            .invoice footer {
                position: absolute;
                bottom: 10px;
                page-break-after: always
            }

            .invoice > div:last-child {
                page-break-before: always
            }
        }
    </style>

    <title>Document</title>
</head>
<body>
<div id="invoice">


<div class="toolbar hidden-print">
    <hr>
</div>
<div class="invoice overflow-auto">
    <div style="min-width: 600px">
        <header>
            <div class="row">
                <div class="col company-details">
                    <h2 class="name">
                        <a target="_blank" href="#">
                            {{setting('site.title')}}
                        </a>
                    </h2>
                    <div>455 Foggy Heights, AZ 85004, US</div>
                    <div>(123) 456-789</div>
                    <div>company@example.com</div>
                </div>
            </div>
        </header>
        <main>
            <div class="row contacts">
                <div class="col invoice-to">
                    <div class="text-gray-light">INVOICE TO:</div>
                    <h2 class="to"> {{\App\Model\OrderUpload::where('id', $id)->first()->orders->users->first()->name}}</h2>
                    <div class="email"><a
                                href="mailto:john@example.com">{{\App\Model\OrderUpload::where('id', $id)->first()->orders->users->first()->email}}</a>
                    </div>
                </div>
                <div class="col invoice-details">
                    <h1 class="invoice-id">Order #{{\App\Model\OrderUpload::where('id', $id)->first()->id}}</h1>
                    <div class="date">Date of
                        Invoice: {{\App\Model\OrderUpload::where('id', $id)->first()->created_at}}</div>
                </div>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
                <thead>
                <tr>
                    <th>#</th>
                    <th class="text-left">IMAGE</th>
                    <th class="text-right">QUANTITY</th>
                    <th class="text-right">COST</th>
                    <th class="text-right">TOTAL</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="no">1</td>
                    <td class="text-left"><img src="{{asset('images/order_upload/'.\App\Model\OrderUpload::where('id', $id)->first()->image)}}">
                    </td>
                    <td class="unit">1</td>
                    <td class="qty">
                        ${{\App\Model\OrderUpload::where('id', $id)->first()->orders->images->first()->cost}}</td>
                    <td class="total">
                        ${{\App\Model\OrderUpload::where('id', $id)->first()->orders->images->first()->cost}}</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2">GRAND TOTAL</td>
                    <td>${{\App\Model\OrderUpload::where('id', $id)->first()->orders->images->first()->cost}}</td>
                </tr>
                </tfoot>
            </table>

        </main>
        <div class="thanks" align="center"><h3>Thank you!</h3></div>
        <footer>
            Invoice was created on a computer and is valid without the signature and seal.
        </footer>
    </div>
    <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
    <div>

    </div>
</div>
</div>

</body>
</html>


