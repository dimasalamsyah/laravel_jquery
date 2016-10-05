 <table class="table table-bordered">   
    <tr>
        <th>Name</th>
        <th>Details</th>          
    </tr>
    @foreach ($barangs as $barang)
    <tr>
        <td>{{ $barang->name }}</td>
        <td>{{ $barang->harga }}</td>
    </tr>
    @endforeach
 </table>
{!! $barangs->render() !!}