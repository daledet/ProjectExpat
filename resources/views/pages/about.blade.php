@extends('layouts.pages.page')
@extends('layouts.pages.header')
@extends('layouts.pages.navbar')


@yield('navbar')
@section('content')
<section class="flex sm:m-2 sm:p2 md:m-8 md:p-4 flex-col all:text-xl md:text-lg ">
    <div class="flex flex-col uppercase text-bold text-2xl p-2">
        <p>
            <span>
               Project Expat Explained
            </span>
        </p>
    </div>
       <div class="flex flex-col p-2">
            <p>
                <span>
                    Difficulties regarding expatriate reentry and repatriation are rooted in the simultaneous
                    political
                    and moral evolution that occurs within individuals and their countries of origin. Project Expat
                    focuses on human migration, with an emphasis on expatriate communities. I am particularly
                    concerned
                    with issues related to individuals who cannot, or will not return - those expatriates who,
                    having
                    spent a significant amount of time in two worlds, discover they no longer have a home in either
                    one.
                </span>
            </p>
        </div>
       <div class="bg-white flex flex-col p-2">
            <p>
                <span>
                    I identify three primary groups of expatriates and study two general obstacles to repatriation
                    –
                    moral/political and family/sexuality. The first group are those who relocate overseas with
                    families.
                    Expatriate workers must maintain an expected level of professionalism while navigating newly
                    discovered cultural norms. Their spouses struggle to keep domestic issues consistent encompassed
                    in
                    an environment with different regulations, curricular, and extracurricular expectations. The
                    second
                    group are those who relocate and build families in their host nations. They relocate alone,
                    develop
                    personal relationships within host nations, build families, and become deeply ingrained members
                    of
                    the community. The third group are those who relocate and follow alternative paths – including
                    homosexual relationships, perpetual promiscuity, and polygamist unions.
                </span>
            </p>
        </div>
       <div class="bg-white flex flex-col p-2">
            <p>
                <span>
                    Regardless of family situation or sexual orientation, each group faces repatriation issues
                    stemming
                    from political and moral evolutionary changes both within themselves and in their country of
                    origin.
                    Long term expatriates cross a cultural event horizon after which returning home becomes
                    impossible.
                </span>
            </p>
        </div>
       <div class="bg-white flex flex-col p-2">
            <p>
                <span>
                    Following the crash in the international oil market, and the global shift to renewable energy
                    sources, many expatriate oil workers struggle with the decision to remain in their host nation
                    or
                    return to their country of origin. The impossibility of full integration into a host community
                    clashes with feelings of otherness at home; expatriates feel and experience physical and
                    emotional
                    torment not unlike military professionals, prison inmates and political refugees.
                </span>
            </p>
        </div>
       <div class="bg-white flex flex-col p-2">
            <p>
                <span>
                    Project Expat seeks a better understanding of this phenomenon, providing nations, corporations, and individuals with tools to overcome these difficulties.
            </p>
        </div>
    </div>
</section>
<hr>

<footer class="w-full border-t bg-white pb-12">

    <div class="w-full container mx-auto flex flex-col items-center">
        <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">
            <a href="#" class="uppercase px-3">About Us</a>
            <a href="#" class="uppercase px-3">Privacy Policy</a>
            <a href="#" class="uppercase px-3">Terms & Conditions</a>
            <a href="#" class="uppercase px-3">Contact Us</a>
        </div>
        <div class="pb-6">&copy; ProjectExpat.org</div>
    </div>
</footer>


@endsection