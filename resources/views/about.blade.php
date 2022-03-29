@extends('layouts/app')

@section('titleblock')Про нас @endsection

@section('content')
    <div class="container">
        <div class="row">
            <p>«Slipknot» [ˈslɪp.nɒt] (в переводе с англ. — «скользящий узел», «петля», «удавка») — американская ню-метал-группа, образованная в сентябре 1995 года в Айове, США. Альбомы группы получили статус платиновых, всего продано более 30 млн копий по всему миру из которых 6 миллионов в США. В 2006 году группа получила свою единственную на сегодняшний день премию «Грэмми». Коллектив известен тем, что его участники на концертах, фотосессиях и интервью носят маски и специальные комбинезоны. Маски видоизменяются с выходом нового альбома. На данный момент группа выпустила шесть официальных студийных альбомов, включая новый We Are Not Your Kind.</p>
        </div>
            <ul class="list-unstyled ps-0">
                <br><br>
                <li class="mb-1">

                    <div class="collapse" id="home-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <div class="main">
                                <form action="{{ route('about.offers') }}" method="post">
                                    @csrf
                                    <input class="form-control" type="text" name="name" placeholder="Ім'я">
                                    <br><br>
                                    <input type="text" name="email" placeholder="Пошта">
                                    <br><br>
                                    <textarea size="100"  style=" height: 200px;width: 370px;" name='content' placeholder='Запитання/пропозиція'></textarea>
                                    <br><br>
                                    <input type="submit" >
                                </form>
                            </div>
                        </ul>
                    </div>
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                        Пропозиції та запитання
                    </button>
                </li>
            </ul>
    </div>
@endsection
