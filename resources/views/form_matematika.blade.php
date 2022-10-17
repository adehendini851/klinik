<form action="{{ url('matematika') }}" method="POST">
    @csrf
    Nilai 1 : <input type="text" name="nilai_1" /><br />
    Nilai 2 : <input type="text" name="nilai_2" /><br />
    <input type="submit" value="Hitung" />
</form>
