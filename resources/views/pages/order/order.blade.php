@extends('layouts.mainlayout')

@section('maincontent')
    <div class="main-content">
        <form class="contact_form" action="#" method="post" name="contact_form">
            {{ csrf_field() }}
            <ul>
                <li>
                    <h2>Оставьте Ваши контакты и мы свяжемся с Вами</h2>
                </li>
                <li>
                    <label for="name">Имя:</label>
                    <input type="text" name="name" placeholder="Ваше имя" required />
                </li>
                <li>
                    <label for="email">Email:</label>
                    <input type="email" name="email" placeholder="john_doe@example.com" required />
                    <span class="form_hint">Proper format "name@something.com"</span>
                </li>
                <li>
                    <label for="message">Message:</label>
                    <textarea name="message" cols="40" rows="6" required ></textarea>
                </li>
                <li>
                    <button class="submit" type="submit">Отпарвить</button>
                </li>
            </ul>
        </form>

    </div>
    <div class="content-bottom"></div>
@endsection
