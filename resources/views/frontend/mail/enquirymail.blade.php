<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SDarchula Hydropower</title>
</head>

<body>


    <h1> Inquiry for Product :{{ $mailData->product_name }} </h1>

    <div
        style="
    background-color: rgb(245, 255, 252);
    font-style: normal;
    padding: 10px;
    width: 100%;
    border-radius: 20px;
  ">
        <div
            style="
      background-color: white;
      margin: 3rem auto;
      padding: 2rem;
      margin-top: 150;
      font-size: 1rem;
      border-radius: 20px;
    ">

            <p style="margin-top: 30px;">Name: {{ $mailData->name }}</p>

            <p>Email:{{ $mailData->email }}</p>
            <p>Phone Number:{{ $mailData->phonenumber }}</p>
            <p>Subject :{{ $mailData->subject }}</p>
            <p>Message: {{ $mailData->message }}</p>

            <p>
                Thank you.
            </p>

        </div>

    </div>

</body>

</html>
