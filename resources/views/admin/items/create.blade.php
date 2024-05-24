<x-admin.layout>
    <x-slot:title>Add Item</x-slot:title>

    <form method="POST" enctype="multipart/form-data" action="{{ route('admin.items.store') }}">
        @csrf

        <x-form-timezone/>

        <section style="width: 1200px;margin-left: 400px;height: auto;margin-top: 103px;background: whitesmoke;">
            <header class="pt-3" style="width: 760px;height: 360px;margin-left: 400px;">
                <div style="height: 360px;">
                    <x-admin.item-input name="name" label="Item name:" placeholder="Item name" required/>
                    <x-form-error name="name"/>
                    <x-admin.item-input name="found_at" label="Found at:" placeholder="Found at" required/>
                    <x-form-error name="found_at"/>

                    <div>
                        <p style="font-size: 18px;color: rgba(53, 51, 45, 1);font-weight: bold;font-family: 'Inter';">
                            Status</p>
                        <x-form-select style="margin-top: -13px" id="status" name="status" required>
                            <option disabled selected>Select an option</option>
                            <option value="unclaimed">Unclaimed</option>
                            <option value="claimed">Claimed</option>
                            <option value="donated">Donated</option>
                        </x-form-select>
                        <x-form-error name="status"/>
                    </div>

                    <x-admin.item-input name="characteristics" label="Characteristics" placeholder="Characteristics"
                                        required/>
                    <x-form-error name="characteristics"/>
                </div>
            </header>
            <div style="width: 400px;height: 360px;margin-top: -360px;">
                <img width="380" height="280" style="width: 380px;height: 300px;margin-top: 0px;">
                <input name="attachment" class="form-control" type="file" style="width: 380px;" accept="image/*"
                       required>
                <x-form-error name="attachment"/>
            </div>
            <div style="height: auto;padding-bottom: 50px;margin-top: 30px;">
                <div class="container" style="padding-bottom: 40px;">
                    <div class="row" style="height: 300px;">
                        <div class="col-md-6">
                            <div style="height: 54px;margin-bottom: 0px;margin-top: 0px;">
                                <x-admin.item-input name="claimed_at" label="Claimed on:" type="datetime-local"/>

                                <x-admin.dropdown-input name="claimed_by" label="Claimed by:" identifier="claimed">
                                    @foreach($personalInfos as $personalInfo)
                                        <x-admin.dropdown-item :data-id="$personalInfo->id" :text="$personalInfo->name"
                                                               :data="$personalInfo"/>
                                    @endforeach
                                </x-admin.dropdown-input>

                                <x-admin.item-input name="claimed_id_number" label="ID number:"/>
                                <x-admin.item-input name="claimed_contact_number" label="Contact number"/>

                                <x-admin.dropdown-input name="released_by" label="Released by:">
                                    @foreach($personalInfos as $personalInfo)
                                        <x-admin.dropdown-item :data-id="$personalInfo->id" :text="$personalInfo->name"
                                                               :data="$personalInfo"/>
                                    @endforeach
                                </x-admin.dropdown-input>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div style="height: 54px;margin-bottom: 0px;margin-top: 0px;">
                                <x-admin.item-input name="reported_at" label="Reported on:" type="datetime-local"/>

                                <x-admin.dropdown-input name="reported_by" label="Reported by:" identifier="reported">
                                    @foreach($personalInfos as $personalInfo)
                                        <x-admin.dropdown-item :data-id="$personalInfo->id" :text="$personalInfo->name"
                                                               :data="$personalInfo"/>
                                    @endforeach
                                </x-admin.dropdown-input>

                                <x-admin.item-input name="reported_id_number" label="ID number:"/>
                                <x-admin.item-input name="reported_contact_number" label="Contact number:"/>

                                <x-admin.dropdown-input name="acknowledged_by" label="Acknowledged by:">
                                    @foreach($personalInfos as $personalInfo)
                                        <x-admin.dropdown-item :data-id="$personalInfo->id" :text="$personalInfo->name"
                                                               :data="$personalInfo"/>
                                    @endforeach
                                </x-admin.dropdown-input>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end pb-4 gap-3 me-4">
                <x-button
                        class="btn-primary font-inter border-0"
                        style="background: rgb(223, 185, 123)"
                        type="submit"
                >Add
                </x-button>
                <a
                        class="btn btn-primary font-inter border-0"
                        role="button"
                        style="background: rgb(223, 185, 123)"
                        href="itemdatabase.html"
                >Cancel</a>
            </div>
        </section>
    </form>
</x-admin.layout>