<x-admin.layout>
    <x-slot:title>Edit Item</x-slot:title>

    <form method="POST" enctype="multipart/form-data" action="{{ route('admin.items.update', compact('item')) }}">
        @csrf
        @method('PATCH')

        <x-form-timezone />

        <section style="width: 1200px;margin-left: 400px;height: auto;margin-top: 103px;background: whitesmoke;">
            <header class="pt-3" style="width: 760px;height: 360px;margin-left: 400px;">
                <div style="height: 360px;">
                    <x-admin.item-input name="name" label="Item name:" placeholder="Item name" value="{{ $item->name }}" required />
                    <x-form-error name="name" />
                    <x-admin.item-input name="found_at" label="Found at:" placeholder="Found at" value="{{ $item->found_at }}" required />
                    <x-form-error name="found_at" />

                    <div>
                        <p style="font-size: 18px;color: rgba(53, 51, 45, 1);font-weight: bold;font-family: 'Inter';">Status</p>
                        <x-form-select style="margin-top: -13px" id="status" name="status" required>
                            <option value="unclaimed" {{ $item->status->value === 'unclaimed' ? 'selected' : '' }}>Unclaimed</option>
                            <option value="claimed" {{ $item->status->value === 'claimed' ? 'selected' : '' }}>Claimed</option>
                            <option value="donated" {{ $item->status->value === 'donated' ? 'selected' : '' }}>Donated</option>
                        </x-form-select>
                        <x-form-error name="status" />
                    </div>

                    <x-admin.item-input name="characteristics" label="Characteristics" placeholder="Characteristics" value="{{ $item->characteristics }}" required />
                    <x-form-error name="characteristics" />
                </div>
            </header>
            <div style="width: 400px;height: 360px;margin-top: -360px;">
                <img width="380" height="280" style="width: 380px;height: 300px;margin-top: 0px;" src="{{ $item->attachment?->url }}">
                <input name="attachment" class="form-control" type="file" style="width: 380px;" accept="image/*">
                <x-form-error name="attachment" />
            </div>
            <div style="height: auto;padding-bottom: 50px;margin-top: 30px;">
                <div class="container" style="padding-bottom: 40px;">
                    <div class="row" style="height: 300px;">
                        <div class="col-md-6">
                            <div style="height: 54px;margin-bottom: 0px;margin-top: 0px;">
                                <x-admin.item-input name="claimed_at" label="Claimed on:" type="datetime-local" value="{{ $item->claimed_date_time }}" />

                                <x-admin.dropdown-input name="claimed_by" label="Claimed by:" identifier="claimed" data-id="{{ $item->claimedBy?->id }}" :selected="$item->claimedBy">
                                    @foreach($personalInfos as $personalInfo)
                                        <x-admin.dropdown-item :data-id="$personalInfo->id" :text="$personalInfo->name" :data="$personalInfo" />
                                    @endforeach
                                </x-admin.dropdown-input>

                                <x-admin.item-input name="claimed_id_number" label="ID number:" value="{{ $item->claimedBy?->id_number }}" />
                                <x-admin.item-input name="claimed_contact_number" label="Contact number" value="{{ $item->claimedBy?->contact_number }}" />

                                <x-admin.dropdown-input name="released_by" label="Released by:" data-id="{{ $item->releasedBy?->id }}" :selected="$item->releasedBy">
                                    @foreach($personalInfos as $personalInfo)
                                        <x-admin.dropdown-item :data-id="$personalInfo->id" :text="$personalInfo->name" :data="$personalInfo" />
                                    @endforeach
                                </x-admin.dropdown-input>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div style="height: 54px;margin-bottom: 0px;margin-top: 0px;">
                                <x-admin.item-input name="reported_at" label="Reported on:" type="datetime-local" value="{{ $item->reported_date_time }}" />

                                <x-admin.dropdown-input name="reported_by" label="Reported by:" identifier="reported" data-id="{{ $item->reportedBy?->id }}" :selected="$item->reportedBy">
                                    @foreach($personalInfos as $personalInfo)
                                        <x-admin.dropdown-item :data-id="$personalInfo->id" :text="$personalInfo->name" :data="$personalInfo" />
                                    @endforeach
                                </x-admin.dropdown-input>

                                <x-admin.item-input name="reported_id_number" label="ID number:" value="{{ $item->reportedBy?->id_number }}"  />
                                <x-admin.item-input name="reported_contact_number" label="Contact number:" value="{{ $item->reportedBy?->contact_number }}"  />

                                <x-admin.dropdown-input name="acknowledged_by" label="Acknowledged by:" data-id="{{ $item->acknowledgedBy?->id }}" :selected="$item->acknowledgedBy">
                                    @foreach($personalInfos as $personalInfo)
                                        <x-admin.dropdown-item :data-id="$personalInfo->id" :text="$personalInfo->name" :data="$personalInfo" />
                                    @endforeach
                                </x-admin.dropdown-input>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end pb-4 gap-3 me-4">
                <x-button
                        class="btn-primary border-0 font-inter"
                        style="background: rgb(223, 185, 123);"
                        type="submit"
                >Save</x-button>
                <a
                        class="btn btn-primary border-0 font-inter"
                        role="button"
                        style="background: rgb(223, 185, 123);"
                        href="{{ route('admin.items.show', compact('item')) }}"
                >Cancel</a>
            </div>
        </section>
    </form>
</x-admin.layout>