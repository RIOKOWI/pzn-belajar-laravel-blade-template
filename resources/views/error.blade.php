<html>
    <body>
        @error('name')
            <p>{{ $message }}</p>
        @enderror
        @error('pass')
            <p>{{ $message }}</p>
        @enderror
    </body>
</html>