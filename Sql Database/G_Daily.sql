USE [Test]
GO
/****** Object:  Table [dbo].[G_Daily]    Script Date: 23.12.2018 22:00:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[G_Daily](
	[date] [date] NULL,
	[currency] [nvarchar](50) NULL,
	[rate] [float] NULL
) ON [PRIMARY]
GO
