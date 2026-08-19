<nav class="bg-slate-100/80 flex items-center p-5 text-white text-center rounded-b-xl w-full mb-14">
    <ul class="flex flex-row items-center gap-10 text-lg">
        <li class="{{ (request()->is('/')) ? 'nav_active' : 'nav_empty' }}">
            <a href="/">
                Halo
            </a>
        </li>
        <li class="{{ (request()->is('about*')) ? 'nav_active' : 'nav_empty' }}">
            <a href="/about">
                Aboot
            </a>
        </li>
    </ul>
</nav>