<div class="company-team">
    @foreach ($datas->team["job_type"] as $job_type)
    <section class="job-type">
        <div class="wrap">
            <p class="job-type-name">{{ $job_type["job_type_name"]}}</p>

            <div class="team-members">
                
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach ($job_type["team_members"] as $team_member)
                            <div class="team-member swiper-slide">
                            {{-- <img class="team-member-photo" src={{ ($team_member["photo"])["url"]}}/> --}}
                                <img class="team-member-photo" src={{ ($team_member["photo"])["url"]}}>
                                <p class="team-member-title">{{ $team_member["name"] }}</p>
                                <p class="team-member-role">{{ $team_member["role"] }}</p>
                            </div>
                        @endforeach
                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>

            </div>

        </div>
    </section>
    @endforeach
</div>