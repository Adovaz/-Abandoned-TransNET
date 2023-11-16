<!DOCTYPE html>
<html> 
<head>
    <meta charset="UTF-8">
    <title>TransNET </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                
                fontFamily: {
                    sans: ['Oxygen', 'sans-serif'],
                    serif: ['Merriweather', 'serif'],
                },
                extend:{
                    colors:{
                        //Define Trans flag colors
                        TPink: '#F5A9B8',
                        TBlue: '#5BCEFA',
                    },
                }
            }
        }
    </script>
</head>
<body>
    <!--Menu Bar-->
    <nav class="sticky top-0 left-0 right-0 flex flex-row justify-center justify-items-center gap-4 bg-white font-sans font-light text-2xl">
        <a href=main.html class="box-decoration-clone p-2 m-2 rounded-md hover:bg-red-200">
            Home
        </a>
        <a href=clinfo.html class="box-decoration-clone p-2 m-2 rounded-md hover:bg-red-200">
            Clinical Info
        </a>
        <a href=ptinfo.html class="box-decoration-clone p-2 m-2 rounded-md hover:bg-red-200">
            Patient Info
        </a>
    </nav>      
</body>
</html>