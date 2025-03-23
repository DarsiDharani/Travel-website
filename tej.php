<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <style>
        :root {
            --light-bg: #f9f9f9;
            --light-black: #333;
            --border: 1px solid #ccc;
            --white: #fff;
            --light-white: #f1f1f1;
        }

        .booking .book-form {
            padding: 2rem;
            background: var(--light-bg);
            width: 700px;
            margin: 0 auto;
            border-radius: 10px;
            background-color: #40679E;
        }

        .booking .book-form .flex {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
        }

        .booking .book-form .flex .inputBox {
            flex: 1 1 36rem;
        }

        .booking .book-form .flex .inputBox input {
            width: 100%;
            padding: 1.2rem 1.4rem;
            font-size: 1.6rem;
            color: var(--light-black);
            text-transform: none;
            margin-top: 1.5rem;
            border: var(--border);
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .booking .book-form .flex .inputBox input:focus {
            background: #7EA1FF;
            color: var(--white);
        }

        .booking .book-form .flex .inputBox input:focus::placeholder {
            color: var(--light-white);
        }

        .booking .book-form .flex .inputBox span {
            font-size: 1.5rem;
            color: #fff;
        }

        .booking .book-form .btn {
            margin-top: 2rem;
            padding: 1rem 2rem;
            font-size: 1.6rem;
            color: #fff;
            background-color: #333;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        .booking .book-form .btn:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

<section class="booking">
    <h1 class="heading-title">Book Your Trip!</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>Name:</span>
                <input type="text" placeholder="Enter your name" name="name" required>
            </div>
            <div class="inputBox">
                <span>Email:</span>
                <input type="email" placeholder="Enter your email" name="email" required>
            </div>
            <div class="inputBox">
                <span>Phone:</span>
                <input type="number" placeholder="Enter your number" name="phone" required>
            </div>
            <div class="inputBox">
                <span>Address:</span>
                <input type="text" placeholder="Enter your address" name="address" required>
            </div>
            <div class="inputBox">
                <span>Where to:</span>
                <input type="text" placeholder="Place you want to visit" name="location" required>
            </div>
            <div class="inputBox">
                <span>How many:</span>
                <input type="text" placeholder="Number of guests" name="guests" required>
            </div>
            <div class="inputBox">
                <span>Arrivals:</span>
                <input type="date" name="arrivals" required>
            </div>
            <div class="inputBox">
                <span>Leaving:</span>
                <input type="date" name="leaving" required>
            </div>
        </div>
        <input type="submit" value="Submit" class="btn" name="submit">
    </form>
</section>

</body>
</html>
