@if (session()->has('message'))
    <script>
        swal({
            icon: 'success',
            text: 'New item has been made!'
            })
    </script>
@elseif (session()->has('delete'))
    <script>
        swal({
            icon: 'success',
            text: 'The item has been deleted!!'
            })
    </script>
@elseif (session()->has('error'))
    <script>
        swal({
            icon: 'success',
            text: 'Item edited successfully!!'
        })
    </script>
@elseif (session()->has('login'))
    <script>
        swal({
            icon: 'success',
            text: 'Login successfully!!'
        })
    </script>
@elseif (session()->has('register'))
    <script>
        swal({
            icon: 'success',
            text: 'Account has been registered!!'
        })
    </script>
@elseif (session()->has('logout'))
    <script>
        swal({
            icon: 'success',
            text: 'Logout successfully!!'
        })
    </script>
@endif