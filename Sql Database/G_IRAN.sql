USE [Test]
GO
/****** Object:  Table [dbo].[G_IRAN]    Script Date: 23.12.2018 22:01:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[G_IRAN](
	[date] [date] NULL,
	[USD] [nvarchar](255) NULL,
	[GBP] [nvarchar](255) NULL,
	[CHF] [nvarchar](255) NULL,
	[SEK] [nvarchar](255) NULL,
	[NOK] [nvarchar](255) NULL,
	[DKK] [nvarchar](255) NULL,
	[INR] [nvarchar](255) NULL,
	[AED] [nvarchar](255) NULL,
	[KWD] [nvarchar](255) NULL,
	[PKR100] [nvarchar](255) NULL,
	[JPY100] [nvarchar](255) NULL,
	[HKD] [nvarchar](255) NULL,
	[OMR] [nvarchar](255) NULL,
	[CAD] [nvarchar](255) NULL,
	[ZAR] [nvarchar](255) NULL,
	[TRY] [nvarchar](255) NULL,
	[RUB] [nvarchar](255) NULL,
	[QAR] [nvarchar](255) NULL,
	[IQD100] [nvarchar](255) NULL,
	[SYP] [nvarchar](255) NULL,
	[AUD] [nvarchar](255) NULL,
	[SAR] [nvarchar](255) NULL,
	[BHD] [nvarchar](255) NULL,
	[SGD] [nvarchar](255) NULL,
	[LKR10] [nvarchar](255) NULL,
	[NPR100] [nvarchar](255) NULL,
	[AMD100] [nvarchar](255) NULL,
	[LYD] [nvarchar](255) NULL,
	[CNY] [nvarchar](255) NULL,
	[THB100] [nvarchar](255) NULL,
	[MYR] [nvarchar](255) NULL,
	[KRW1000] [nvarchar](255) NULL,
	[EUR] [nvarchar](255) NULL,
	[KZT100] [nvarchar](255) NULL,
	[AFN] [nvarchar](255) NULL,
	[BYN] [nvarchar](255) NULL,
	[AZN] [nvarchar](255) NULL,
	[TJS] [nvarchar](255) NULL,
	[VEF] [nvarchar](255) NULL
) ON [PRIMARY]
GO
INSERT [dbo].[G_IRAN] ([date], [USD], [GBP], [CHF], [SEK], [NOK], [DKK], [INR], [AED], [KWD], [PKR100], [JPY100], [HKD], [OMR], [CAD], [ZAR], [TRY], [RUB], [QAR], [IQD100], [SYP], [AUD], [SAR], [BHD], [SGD], [LKR10], [NPR100], [AMD100], [LYD], [CNY], [THB100], [MYR], [KRW1000], [EUR], [KZT100], [AFN], [BYN], [AZN], [TJS], [VEF]) VALUES (CAST(N'2018-11-26' AS Date), N'42000', N'53804', N'42091', N'4620', N'4888', N'6382', N'596', N'11436', N'137890', N'31242', N'37091', N'5367', N'109227', N'31779', N'3037', N'7938', N'632', N'11538', N'3522', N'82', N'30419', N'11200', N'111694', N'30568', N'2335', N'37048', N'8673', N'30107', N'6049', N'127050', N'10017', N'37184', N'47616', N'11399', N'554', N'19963', N'24748', N'4457', N'4205')
INSERT [dbo].[G_IRAN] ([date], [USD], [GBP], [CHF], [SEK], [NOK], [DKK], [INR], [AED], [KWD], [PKR100], [JPY100], [HKD], [OMR], [CAD], [ZAR], [TRY], [RUB], [QAR], [IQD100], [SYP], [AUD], [SAR], [BHD], [SGD], [LKR10], [NPR100], [AMD100], [LYD], [CNY], [THB100], [MYR], [KRW1000], [EUR], [KZT100], [AFN], [BYN], [AZN], [TJS], [VEF]) VALUES (CAST(N'2018-11-27' AS Date), N'42000', N'53811', N'42076', N'4622', N'4893', N'6381', N'593', N'11437', N'137999', N'31245', N'37006', N'5369', N'109233', N'31685', N'3022', N'8007', N'628', N'11539', N'3527', N'82', N'30356', N'11201', N'111704', N'30537', N'2330', N'36870', N'8666', N'29979', N'6049', N'127234', N'10018', N'37190', N'47608', N'11470', N'553', N'19951', N'24757', N'4457', N'4206')
INSERT [dbo].[G_IRAN] ([date], [USD], [GBP], [CHF], [SEK], [NOK], [DKK], [INR], [AED], [KWD], [PKR100], [JPY100], [HKD], [OMR], [CAD], [ZAR], [TRY], [RUB], [QAR], [IQD100], [SYP], [AUD], [SAR], [BHD], [SGD], [LKR10], [NPR100], [AMD100], [LYD], [CNY], [THB100], [MYR], [KRW1000], [EUR], [KZT100], [AFN], [BYN], [AZN], [TJS], [VEF]) VALUES (CAST(N'2018-11-28' AS Date), N'42000', N'53511', N'42025', N'4614', N'4884', N'6357', N'594', N'11437', N'137989', N'31274', N'36895', N'5367', N'109233', N'31570', N'3014', N'7976', N'628', N'11539', N'3527', N'82', N'30377', N'11201', N'111702', N'30473', N'2333', N'36937', N'8666', N'30014', N'6040', N'127126', N'10014', N'37231', N'47432', N'11238', N'553', N'19690', N'24756', N'4457', N'4206')
INSERT [dbo].[G_IRAN] ([date], [USD], [GBP], [CHF], [SEK], [NOK], [DKK], [INR], [AED], [KWD], [PKR100], [JPY100], [HKD], [OMR], [CAD], [ZAR], [TRY], [RUB], [QAR], [IQD100], [SYP], [AUD], [SAR], [BHD], [SGD], [LKR10], [NPR100], [AMD100], [LYD], [CNY], [THB100], [MYR], [KRW1000], [EUR], [KZT100], [AFN], [BYN], [AZN], [TJS], [VEF]) VALUES (CAST(N'2018-11-29' AS Date), N'42000', N'53941', N'42328', N'4654', N'4916', N'6408', N'600', N'11437', N'137941', N'31273', N'37074', N'5369', N'109232', N'31658', N'3053', N'8046', N'627', N'11539', N'3526', N'82', N'30707', N'11200', N'111703', N'30646', N'2342', N'37322', N'8660', N'30239', N'6051', N'127608', N'10024', N'37460', N'47813', N'11260', N'553', N'19553', N'24750', N'4457', N'4206')
INSERT [dbo].[G_IRAN] ([date], [USD], [GBP], [CHF], [SEK], [NOK], [DKK], [INR], [AED], [KWD], [PKR100], [JPY100], [HKD], [OMR], [CAD], [ZAR], [TRY], [RUB], [QAR], [IQD100], [SYP], [AUD], [SAR], [BHD], [SGD], [LKR10], [NPR100], [AMD100], [LYD], [CNY], [THB100], [MYR], [KRW1000], [EUR], [KZT100], [AFN], [BYN], [AZN], [TJS], [VEF]) VALUES (CAST(N'2018-11-30' AS Date), N'42000', N'53941', N'42328', N'4654', N'4916', N'6408', N'600', N'11437', N'137941', N'31273', N'37074', N'5369', N'109232', N'31658', N'3053', N'8046', N'627', N'11539', N'3526', N'82', N'30707', N'11200', N'111703', N'30646', N'2342', N'37322', N'8660', N'30239', N'6051', N'127608', N'10024', N'37460', N'47813', N'11260', N'553', N'19553', N'24750', N'4457', N'4206')
INSERT [dbo].[G_IRAN] ([date], [USD], [GBP], [CHF], [SEK], [NOK], [DKK], [INR], [AED], [KWD], [PKR100], [JPY100], [HKD], [OMR], [CAD], [ZAR], [TRY], [RUB], [QAR], [IQD100], [SYP], [AUD], [SAR], [BHD], [SGD], [LKR10], [NPR100], [AMD100], [LYD], [CNY], [THB100], [MYR], [KRW1000], [EUR], [KZT100], [AFN], [BYN], [AZN], [TJS], [VEF]) VALUES (CAST(N'2018-12-01' AS Date), N'42000', N'53564', N'42077', N'4610', N'4887', N'6370', N'603', N'11437', N'137994', N'29976', N'36987', N'5368', N'109232', N'31601', N'3029', N'8053', N'628', N'11539', N'3527', N'82', N'30700', N'11200', N'111701', N'30612', N'2348', N'37454', N'8656', N'30024', N'6037', N'127409', N'10046', N'37496', N'47532', N'11247', N'556', N'19673', N'24706', N'4459', N'4206')
INSERT [dbo].[G_IRAN] ([date], [USD], [GBP], [CHF], [SEK], [NOK], [DKK], [INR], [AED], [KWD], [PKR100], [JPY100], [HKD], [OMR], [CAD], [ZAR], [TRY], [RUB], [QAR], [IQD100], [SYP], [AUD], [SAR], [BHD], [SGD], [LKR10], [NPR100], [AMD100], [LYD], [CNY], [THB100], [MYR], [KRW1000], [EUR], [KZT100], [AFN], [BYN], [AZN], [TJS], [VEF]) VALUES (CAST(N'2018-12-02' AS Date), N'42000', N'53564', N'42077', N'4610', N'4887', N'6370', N'603', N'11437', N'137994', N'29976', N'36987', N'5368', N'109232', N'31601', N'3029', N'8053', N'628', N'11539', N'3527', N'82', N'30700', N'11200', N'111701', N'30612', N'2348', N'37454', N'8656', N'30024', N'6037', N'127409', N'10046', N'37496', N'47532', N'11247', N'556', N'19673', N'24706', N'4459', N'4206')
INSERT [dbo].[G_IRAN] ([date], [USD], [GBP], [CHF], [SEK], [NOK], [DKK], [INR], [AED], [KWD], [PKR100], [JPY100], [HKD], [OMR], [CAD], [ZAR], [TRY], [RUB], [QAR], [IQD100], [SYP], [AUD], [SAR], [BHD], [SGD], [LKR10], [NPR100], [AMD100], [LYD], [CNY], [THB100], [MYR], [KRW1000], [EUR], [KZT100], [AFN], [BYN], [AZN], [TJS], [VEF]) VALUES (CAST(N'2018-12-03' AS Date), N'42000', N'53650', N'42089', N'4633', N'4924', N'6389', N'600', N'11437', N'137997', N'30222', N'37009', N'5370', N'109233', N'31795', N'3063', N'8107', N'631', N'11539', N'3512', N'82', N'30939', N'11200', N'111703', N'30703', N'2351', N'37308', N'8656', N'30002', N'6055', N'128016', N'10057', N'37742', N'47679', N'11220', N'554', N'19679', N'24755', N'4457', N'4206')
INSERT [dbo].[G_IRAN] ([date], [USD], [GBP], [CHF], [SEK], [NOK], [DKK], [INR], [AED], [KWD], [PKR100], [JPY100], [HKD], [OMR], [CAD], [ZAR], [TRY], [RUB], [QAR], [IQD100], [SYP], [AUD], [SAR], [BHD], [SGD], [LKR10], [NPR100], [AMD100], [LYD], [CNY], [THB100], [MYR], [KRW1000], [EUR], [KZT100], [AFN], [BYN], [AZN], [TJS], [VEF]) VALUES (CAST(N'2018-12-04' AS Date), N'42000', N'53530', N'42167', N'4669', N'4937', N'6404', N'597', N'11436', N'138088', N'30196', N'37132', N'5379', N'109228', N'31871', N'3084', N'7973', N'632', N'11538', N'3526', N'82', N'30978', N'11200', N'111696', N'30775', N'2349', N'37120', N'8660', N'29986', N'6140', N'128443', N'10115', N'37903', N'47788', N'11278', N'554', N'19711', N'24754', N'4458', N'4205')
INSERT [dbo].[G_IRAN] ([date], [USD], [GBP], [CHF], [SEK], [NOK], [DKK], [INR], [AED], [KWD], [PKR100], [JPY100], [HKD], [OMR], [CAD], [ZAR], [TRY], [RUB], [QAR], [IQD100], [SYP], [AUD], [SAR], [BHD], [SGD], [LKR10], [NPR100], [AMD100], [LYD], [CNY], [THB100], [MYR], [KRW1000], [EUR], [KZT100], [AFN], [BYN], [AZN], [TJS], [VEF]) VALUES (CAST(N'2018-12-05' AS Date), N'42000', N'53331', N'42034', N'4650', N'4929', N'6376', N'595', N'11437', N'138004', N'30238', N'37177', N'5382', N'109234', N'31619', N'3034', N'7800', N'628', N'11539', N'3509', N'82', N'30623', N'11201', N'111703', N'30701', N'2347', N'36971', N'8657', N'29974', N'6117', N'128104', N'10103', N'37678', N'47581', N'11333', N'554', N'19714', N'24757', N'4458', N'4206')
INSERT [dbo].[G_IRAN] ([date], [USD], [GBP], [CHF], [SEK], [NOK], [DKK], [INR], [AED], [KWD], [PKR100], [JPY100], [HKD], [OMR], [CAD], [ZAR], [TRY], [RUB], [QAR], [IQD100], [SYP], [AUD], [SAR], [BHD], [SGD], [LKR10], [NPR100], [AMD100], [LYD], [CNY], [THB100], [MYR], [KRW1000], [EUR], [KZT100], [AFN], [BYN], [AZN], [TJS], [VEF]) VALUES (CAST(N'2018-12-06' AS Date), N'42000', N'53443', N'42153', N'4673', N'4924', N'6384', N'592', N'11437', N'137979', N'30231', N'37282', N'5377', N'109233', N'31352', N'3013', N'7788', N'632', N'11539', N'3530', N'82', N'30339', N'11201', N'111705', N'30643', N'2344', N'36785', N'8658', N'30114', N'6106', N'127935', N'10086', N'37521', N'47644', N'11335', N'558', N'19681', N'24755', N'4457', N'4206')
INSERT [dbo].[G_IRAN] ([date], [USD], [GBP], [CHF], [SEK], [NOK], [DKK], [INR], [AED], [KWD], [PKR100], [JPY100], [HKD], [OMR], [CAD], [ZAR], [TRY], [RUB], [QAR], [IQD100], [SYP], [AUD], [SAR], [BHD], [SGD], [LKR10], [NPR100], [AMD100], [LYD], [CNY], [THB100], [MYR], [KRW1000], [EUR], [KZT100], [AFN], [BYN], [AZN], [TJS], [VEF]) VALUES (CAST(N'2018-12-07' AS Date), N'42000', N'53443', N'42153', N'4673', N'4924', N'6384', N'592', N'11437', N'137979', N'30231', N'37282', N'5377', N'109233', N'31352', N'3013', N'7788', N'632', N'11539', N'3530', N'82', N'30339', N'11201', N'111705', N'30643', N'2344', N'36785', N'8658', N'30114', N'6106', N'127935', N'10086', N'37521', N'47644', N'11335', N'558', N'19681', N'24755', N'4457', N'4206')
INSERT [dbo].[G_IRAN] ([date], [USD], [GBP], [CHF], [SEK], [NOK], [DKK], [INR], [AED], [KWD], [PKR100], [JPY100], [HKD], [OMR], [CAD], [ZAR], [TRY], [RUB], [QAR], [IQD100], [SYP], [AUD], [SAR], [BHD], [SGD], [LKR10], [NPR100], [AMD100], [LYD], [CNY], [THB100], [MYR], [KRW1000], [EUR], [KZT100], [AFN], [BYN], [AZN], [TJS], [VEF]) VALUES (CAST(N'2018-12-08' AS Date), N'42000', N'53464', N'42388', N'4642', N'4931', N'6406', N'589', N'11437', N'138141', N'30300', N'37258', N'5373', N'109234', N'31523', N'2963', N'7920', N'634', N'11539', N'3527', N'82', N'30251', N'11201', N'111703', N'30677', N'2352', N'36605', N'8661', N'30020', N'6110', N'127884', N'10081', N'37328', N'47831', N'11333', N'555', N'19719', N'24706', N'4457', N'4206')
INSERT [dbo].[G_IRAN] ([date], [USD], [GBP], [CHF], [SEK], [NOK], [DKK], [INR], [AED], [KWD], [PKR100], [JPY100], [HKD], [OMR], [CAD], [ZAR], [TRY], [RUB], [QAR], [IQD100], [SYP], [AUD], [SAR], [BHD], [SGD], [LKR10], [NPR100], [AMD100], [LYD], [CNY], [THB100], [MYR], [KRW1000], [EUR], [KZT100], [AFN], [BYN], [AZN], [TJS], [VEF]) VALUES (CAST(N'2018-12-09' AS Date), N'42000', N'53464', N'42388', N'4642', N'4931', N'6406', N'589', N'11437', N'138141', N'30300', N'37258', N'5373', N'109234', N'31523', N'2963', N'7920', N'634', N'11539', N'3527', N'82', N'30251', N'11201', N'111703', N'30677', N'2352', N'36605', N'8661', N'30020', N'6110', N'127884', N'10081', N'37328', N'47831', N'11333', N'555', N'19719', N'24706', N'4457', N'4206')
INSERT [dbo].[G_IRAN] ([date], [USD], [GBP], [CHF], [SEK], [NOK], [DKK], [INR], [AED], [KWD], [PKR100], [JPY100], [HKD], [OMR], [CAD], [ZAR], [TRY], [RUB], [QAR], [IQD100], [SYP], [AUD], [SAR], [BHD], [SGD], [LKR10], [NPR100], [AMD100], [LYD], [CNY], [THB100], [MYR], [KRW1000], [EUR], [KZT100], [AFN], [BYN], [AZN], [TJS], [VEF]) VALUES (CAST(N'2018-12-10' AS Date), N'42000', N'53528', N'42505', N'4655', N'4949', N'6430', N'589', N'11437', N'138049', N'30346', N'37359', N'5376', N'109232', N'31567', N'2971', N'7909', N'633', N'11539', N'3529', N'82', N'30296', N'11200', N'111700', N'30661', N'2350', N'36603', N'8660', N'30123', N'6095', N'127877', N'10073', N'37343', N'47994', N'11349', N'554', N'19774', N'24748', N'4458', N'4206')
INSERT [dbo].[G_IRAN] ([date], [USD], [GBP], [CHF], [SEK], [NOK], [DKK], [INR], [AED], [KWD], [PKR100], [JPY100], [HKD], [OMR], [CAD], [ZAR], [TRY], [RUB], [QAR], [IQD100], [SYP], [AUD], [SAR], [BHD], [SGD], [LKR10], [NPR100], [AMD100], [LYD], [CNY], [THB100], [MYR], [KRW1000], [EUR], [KZT100], [AFN], [BYN], [AZN], [TJS], [VEF]) VALUES (CAST(N'2018-12-11' AS Date), N'42000', N'52843', N'42474', N'4624', N'4912', N'6397', N'582', N'11437', N'138300', N'30230', N'37149', N'5375', N'109234', N'31340', N'2924', N'7882', N'631', N'11539', N'3530', N'82', N'30259', N'11201', N'111703', N'30595', N'2347', N'36173', N'8660', N'29998', N'6086', N'127919', N'10047', N'37205', N'47745', N'11363', N'554', N'19774', N'24756', N'4458', N'4206')
