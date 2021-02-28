  @foreach($review2 as $r)
                                                <li>
                                                    <div class="comments-details">


                                                        <div class="comments-content-wrap">
                                                            <span>
                                                                <b><a >{{$r->user->name}} - </a></b>
                                                                <span class="post-time">{{$r->created_at}}</span>
                                                            </span>
                                                            <p><form action="">
                                                                <fieldset disabled="" class="b">
    <input @if($r->star > 4.75 &&$r->star <= 5.25){{'checked'}}@endif type="radio"  class="i"  name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input @if($r->star > 4.25 &&$r->star <= 4.75){{'checked'}}@endif type="radio"  class="i"  name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input @if($r->star > 3.75 &&$r->star <= 4.25){{'checked'}}@endif type="radio"  class="i"  name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input @if($r->star > 3.25 &&$r->star <= 3.75){{'checked'}}@endif type="radio"  class="i"  name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input @if($r->star > 2.75 &&$r->star <= 3.25){{'checked'}}@endif  type="radio"  class="i"  name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input @if($r->star > 2.25 &&$r->star <= 2.75){{'checked'}}@endif type="radio"  class="i"  name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input @if($r->star > 1.75 &&$r->star <= 2.25){{'checked'}}@endif type="radio"  class="i" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input @if($r->star > 1.25 &&$r->star <= 1.75){{'checked'}}@endif type="radio"  class="i"  name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input @if($r->star > 0.75 &&$r->star <= 1.25){{'checked'}}@endif type="radio"  class="i"  name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input @if($r->star >= 0.5 &&$r->star <= 0.75){{'checked'}}@endif type="radio" class="i" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset></form>
                                                            </p>
                                                            <p>&nbsp {{$r->content}}</p>
                                                        </div>

                                                    </div>
                                                </li>
                                                @endforeach
                                                <div class="text-center">{{$review2->links()}}</div>

