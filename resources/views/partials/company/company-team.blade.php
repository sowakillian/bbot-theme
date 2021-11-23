<div class="company-team">
    @foreach ($datas->team["job_type"] as $job_type)
    <section class="job-type">
        <div class="wrap">
            <p class="job-type-name">{{ $job_type["job_type_name"]}}</p>

            <div class="team-members">
                @foreach ($job_type["team_members"] as $team_member)
                <div class="team-member">
                    {{-- <img class="team-member-photo" src={{ ($team_member["photo"])["url"]}}/> --}}
                    <img class="team-member-photo" src="@asset('images/todelete_teammember.png')"}/>
                    <p class="team-member-title">{{ $team_member["name"] }}</p>
                    <p class="team-member-role">{{ $team_member["role"] }}</p>
                </div>
            @endforeach
            </div>

        </div>
    </section>
    @endforeach
</div>