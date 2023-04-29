<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>


    <div class="container  mt-3">
        <h2 class="text-center">{{ $title }}</h2>
        <form action="{{ url('/') }}{{ $url }}" method="post">
            @csrf
            {{-- <pre>
            {{ $errors }}
            </pre> --}}


            <input type="hidden" name="studentID" value="@php if(isset($student->studentID)){
                echo $student->studentID;
                
                
                
                                    }else{
                
                
                                        echo " ";
                                    } @endphp " >
            <div class="mb-3 mt-3">
                <label for="email">Student Name</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="sname"
                    value=" @php
if(isset($student->studentName)){
echo $student->studentName;



                    }else{


                        echo " ";
                    } @endphp ">
                <span class="text-danger">
                    @error('sname')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            {{-- <div class="mb-3">Gender
                <input type="radio" value="male" name="sgender"
                    @php
if($student->gender == "male"){
                        echo "checked";
                    } @endphp>
                Male
                <input type="radio" value="female" name="sgender"
                    @php
if($student->gender == "female"){
                    echo "checked";
                } @endphp>
                Female
            </div>
            <span class="text-danger">
                @error('sgender')
                    {{ $message }}
                @enderror
            </span> --}}
            <div class="mb-3 mt-3">
                <label for="email">Student Contact</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="scontact"
                    value=" @php
if(isset($student->contact)){
                echo $student->contact;
                
                
                
                                    }else{
                
                
                                        echo " ";
                                    } @endphp ">
                <span class="text-danger">
                    @error('scontact')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="mb-3 mt-3">
                <label for="email">City</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="scity"
                    value=" @php
if(isset($student->city)){
                echo $student->city;
                
                
                
                                    }else{
                
                
                                        echo " ";
                                    } @endphp ">
                <span class="text-danger">
                    @error('scity')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3 mt-3">
                <label for="email">Password</label>
                <input type="password" class="form-control" id="email" placeholder="Enter email" name="password"
                    value=" @php
if(isset($student->password)){
                echo $student->password;
                
                
                
                                    } @endphp ">
                {{-- <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span> --}}
            </div>
            <div class="mb-3 mt-3">
                <label for="email">confirm password</label>
                <input type="password" class="form-control" id="email" placeholder="Enter email" name="confirmPass"
                    value=" @php
if(isset($student->password)){
                echo $student->password;
                
                
                
                                    }else{
                
                
                                        echo " ";
                                    } @endphp ">
                <span class="text-danger">
                    @error('confirmPass')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <!-- <div class="mb-3 mt-3">
                <label for="email">Upload Picture</label>
                <input type="file" class="form-control" id="email" placeholder="Enter email" name="spicture">
            </div> -->
            <button type="submit" name="insert" class="btn btn-primary">Submit</button>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>
