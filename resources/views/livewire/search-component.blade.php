<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>
    <style>
        body {
            background: rgba(244, 231, 224, 0.95);
        }

        ::selection {
            background: rgba(244, 231, 224, 0.95);
        }

        .search-wrapper {
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
        }

        .search-wrapper.active {}

        .search-wrapper .input-holder {
            height: 70px;
            width: 70px;
            overflow: hidden;
            background: rgba(255, 255, 255, 0);
            border-radius: 6px;
            position: relative;
            transition: all 0.3s ease-in-out;
        }

        .search-wrapper.active .input-holder {
            width: 450px;
            border-radius: 50px;
            background: rgba(0, 0, 0, 0.5);
            transition: all 0.5s cubic-bezier(0, 0.105, 0.035, 1.57);
        }

        .search-wrapper .input-holder .search-input {
            width: 100%;
            height: 50px;
            position: absolute;
            padding: 0 70px 0 20px;
            opacity: 0;
            top: 0px;
            left: 0px;
            background: transparent;
            box-sizing: border-box;
            border: none;
            outline: none;
            font-family: "Open Sans", Arial;
            font-size: 16px;
            font-weight: 400;
            line-height: 20px;
            color: #fff;
            transform: translate(0, 60px);
            transition: all 0.3s cubic-bezier(0, 0.105, 0.035, 1.57);
            transition-delay: 0.3s;
        }

        .search-wrapper.active .input-holder .search-input {
            opacity: 1;
            transform: translate(0, 10px);
        }

        .search-wrapper .input-holder .search-icon {
            width: 70px;
            height: 70px;
            border: none;
            border-radius: 6px;
            background: #fff;
            padding: 0;
            outline: none;
            position: relative;
            z-index: 2;
            float: right;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .search-wrapper.active .input-holder .search-icon {
            width: 50px;
            height: 50px;
            margin: 10px;
            border-radius: 30px;
        }

        .search-wrapper .input-holder .search-icon span {
            width: 22px;
            height: 22px;
            display: inline-block;
            vertical-align: middle;
            position: relative;
            transform: rotate(45deg);
            transition: all 0.45s cubic-bezier(0.65, -0.6, 0.24, 1.65);
        }

        .search-wrapper.active .input-holder .search-icon span {
            transform: rotate(-45deg);
        }

        .search-wrapper .input-holder .search-icon span:before,
        .search-wrapper .input-holder .search-icon span:after {
            position: absolute;
            content: "";
        }

        .search-wrapper .input-holder .search-icon span:before {
            width: 4px;
            height: 11px;
            left: 9px;
            top: 18px;
            border-radius: 2px;
            background: #fe5f55;
        }

        .search-wrapper .input-holder .search-icon span:after {
            width: 14px;
            height: 14px;
            left: 0px;
            top: 0px;
            border-radius: 16px;
            border: 4px solid #fe5f55;
        }

        .search-wrapper .close {
            position: absolute;
            z-index: 1;
            top: 24px;
            right: 20px;
            width: 25px;
            height: 25px;
            cursor: pointer;
            transform: rotate(-180deg);
            transition: all 0.3s cubic-bezier(0.285, -0.45, 0.935, 0.11);
            transition-delay: 0.2s;
        }

        .search-wrapper.active .close {
            right: -50px;
            transform: rotate(45deg);
            transition: all 0.6s cubic-bezier(0, 0.105, 0.035, 1.57);
            transition-delay: 0.5s;
            color: black;
        }

        .search-wrapper .close::before,
        .search-wrapper .close::after {
            position: absolute;
            content: "";
            background: #fe5f55;
            border-radius: 2px;
        }

        .search-wrapper .close::before {
            width: 5px;
            height: 25px;
            left: 10px;
            top: 0px;
        }

        .search-wrapper .close::after {
            width: 25px;
            height: 5px;
            left: 0px;
            top: 10px;
        }

    </style>
    
</head>

<body>

    <div class="search-wrapper">
        <div class="input-holder">
            <input type="text" class="search-input" placeholder='Type to search' wire:model="searchproduct" />
            <button class="search-icon" onclick='searchToggle(this,event);'><span></span>
            </button>
        </div>
        <span class="close" onclick='searchToggle(this,event);'></span>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function searchToggle(obj, evt) {
            var container = $(obj).closest('.search-wrapper');
            if (!container.hasClass('active')) {
                container.addClass('active');
                evt.preventDefault();

            } else if (container.hasClass('active') && $(obj).closest('.input-holder').length == 0) {

                container.removeClass('active');
                container.find('.search-input').val('');
            }

        }
    </script>
</body>

</html>
